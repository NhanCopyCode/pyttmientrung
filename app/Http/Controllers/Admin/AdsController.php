<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\PositionAds;
use App\Models\SysMenu;
use App\Models\SysPosition;
use App\Models\Video;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class AdsController extends Controller
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



        $ads = Ads::query()
            ->when($keyword, function ($query, $keyword) {
                $query->where('title', 'like', "%$keyword%");
            })
            ->paginate($perPage)
            ->appends($request->only('search'));

        return view('admin.ads.index', compact('ads'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $positions = PositionAds::select('id', 'comment')->where('approved', true)->orderBy('arrange')->get();

        return view('admin.ads.create', compact('positions'));
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
            'position' => 'required|exists:ads_pos,id',
            'title'     => 'required|string|max:255',
            'link'      => 'nullable|url|max:255',
            'arrange'   => 'nullable|integer',
            'approved'  => 'boolean',
            'avatar'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create new Video instance
        $ads = new Ads();

        $ads->title = $validated['title'];
        $ads->type = 1;
        $ads->vitri = $validated['position'];
        $ads->approved = $validated['approved'] ?? false;
        $ads->arrange = $validated['arrange'];
        $ads->link = $validated['link'];
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/ads'), $imageName);
            $ads->pathimage = 'uploads/ads/' . $imageName;
        }

        $ads->save();
        Alert::success(__('message.ads.created_success'));

        return redirect('admin/ads');
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
        $ads = Ads::findOrFail($id);
        return view('admin.ads.show', compact('ads'));
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
        $ads = Ads::findOrFail($id);
        $positions = PositionAds::select('id', 'comment')->where('approved', true)->orderBy('arrange')->get();

        return view('admin.ads.edit', compact('ads', 'positions'));
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
        $validated = $request->validate([
            'position' => 'required|exists:ads_pos,id',
            'title'     => 'required|string|max:255',
            'link'      => 'nullable|url|max:255',
            'arrange'   => 'nullable|integer',
            'approved'  => 'boolean',
            'avatar'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create new Video instance
        $ads = Ads::findOrFail($id);

        $ads->title = $validated['title'];
        $ads->type = 1;
        $ads->vitri = $validated['position'];
        $ads->approved = $validated['approved'] ?? false;
        $ads->arrange = $validated['arrange'];
        $ads->link = $validated['link'];
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/ads'), $imageName);
            $ads->pathimage = 'uploads/ads/' . $imageName;
        }

        $ads->save();
        Alert::success(__('message.ads.updated_success'));

        return redirect()->route('ads.index')->with('success', 'Cập nhật quảng cáo thành công!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ads::destroy($id);

        Alert::success(trans('message.ads.deleted_success'));


        // toastr()->success(trans('message.role.role.deleted_success'));

        return redirect('admin/ads');
    }

    public function updateArrange(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:ads,id',
            'arrange' => 'required|integer',
        ]);

        $ads = Ads::findOrFail($request->id);
        $ads->arrange = $request->arrange;
        $ads->save();

        // Alert::success(__('message.menu.updated_success'));

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }
}
