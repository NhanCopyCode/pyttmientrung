<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SysMenu;
use Illuminate\Http\Request;

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

        // Only parent menus (ptypeid is null or 0), eager load children
        $menus = SysMenu::with(['children' => function ($query) {
            $query->where('approved', 1)->orderBy('arrange');
        }])
            ->when($keyword, function ($query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('title', 'LIKE', "%{$keyword}%")
                        ->orWhere('url', 'LIKE', "%{$keyword}%");
                });
            })
            ->where('approved', 1)
            ->where(function ($query) {
                $query->whereNull('ptypeid')->orWhere('ptypeid', 0);
            })
            ->orderBy('arrange')
            ->paginate($perPage);

        return view('admin.menus.index', compact('menus'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $listParent = SysMenu::where('ptypeid', 0)->where('approved', 1)->orderBy('arrange')->get();
        return view('admin.menus.create', compact('listParent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }
}
