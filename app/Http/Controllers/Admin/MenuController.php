<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SysAttributes;
use App\Models\SysMenu;
use App\Models\SysPosition;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 20;

        $menus = SysMenu::with(['children' => function ($query) {
            $query->orderBy('arrange');
        }])
            ->when($keyword, function ($query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('title', 'LIKE', "%{$keyword}%")
                        ->orWhere('url', 'LIKE', "%{$keyword}%")
                        ->orWhereHas('children', function ($qChild) use ($keyword) {
                            $qChild->where('title', 'LIKE', "%{$keyword}%")
                                ->orWhere('url', 'LIKE', "%{$keyword}%");
                        });
                });
            })
            ->where(function ($query) {
                $query->whereNull('ptypeid')->orWhere('ptypeid', 0);
            })
            ->orderBy('arrange')
            ->paginate($perPage);
        $listPosition = SysAttributes::where('approved', 1)->get();
        return view('admin.menus.index', compact('menus', 'listPosition'));
    }

    public function getPositionsByParent($ptypeid)
    {
        $menu = SysMenu::with('menu_position')->where("menu_id", $ptypeid)->get();

        if (!$menu) {
            return response()->json([]);
        }

        return response()->json($menu->positions->pluck('id'));
    }



    public function create()
    {
        //

        $listParent = SysMenu::where('ptypeid', 0)->where('approved', 1)->orderBy('arrange')->get();
        // $listParent = SysAttributes::where('approved', 1)->get();

        // $listPosition = SysPosition::all();
        $listPosition = SysAttributes::where('approved', 1)->get();
        return view('admin.menus.create', compact('listParent', 'listPosition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'ptypeid'    => 'required|integer',
            'position'   => 'nullable|array',
            'arrange'    => 'nullable|integer',
            'active'     => 'nullable|boolean',
        ]);

        $slug = Str::slug($validated['title'], '-');

        $positionString = isset($validated['position']) && is_array($validated['position']) && count($validated['position']) > 0
            ? implode(',', $validated['position'])
            : '0,0,0,0,0,0';

        $data = [
            'title'    => $validated['title'],
            'ptypeid'  => $validated['ptypeid'],
            'url'      => $slug,
            'arrange'  => $validated['arrange'] ?? 0,
            'approved' => $validated['active'] ?? 0,
            'position' => $positionString,
        ];

        SysMenu::create($data);

        return redirect('admin/menus')->with('success', 'Thêm menu thành công!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $menu = SysMenu::with('parent')->findOrFail($id);
        return view('admin.menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = SysMenu::findOrFail($id);
        $listParent = SysMenu::where('ptypeid', 0)->where('approved', 1)->orderBy('arrange')->get();
        $listPosition = SysAttributes::where('approved', 1)->get();
        return view('admin.menus.edit', compact('menu', 'listParent', 'listPosition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'     => 'required|string|max:255',
            'ptypeid'   => 'required|integer',
            'position'  => 'nullable|array',
            'position.*' => 'exists:sys_position,id',
            'arrange'   => 'nullable|integer',
            'active'    => 'nullable|boolean',
        ]);

        $slug = Str::slug($validatedData['title'], '-');

        $menu = SysMenu::findOrFail($id);

        $menu->title = $validatedData['title'];
        $menu->ptypeid = $validatedData['ptypeid'];
        $menu->arrange = $validatedData['arrange'] ?? 0;
        $menu->approved = $request->has('active') ? 1 : 0; // checkbox
        $menu->url = $slug;

        $menu->save();

        $menu->positions()->sync($validatedData['position'] ?? []);

        Alert::success(__('message.menu.updated_success'));

        return redirect()->route('menus.index')->with('success', 'Cập nhật menu thành công!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SysMenu::destroy($id);

        Alert::success(trans('message.menu.deleted_success'));

        return redirect('admin/menus');
    }

    public function updateArrange(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:sys_menu,id',
            'arrange' => 'required|integer',
        ]);

        $menu = SysMenu::findOrFail($request->id);
        $menu->arrange = $request->arrange;
        $menu->save();

        // Alert::success(__('message.menu.updated_success'));

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }
}
