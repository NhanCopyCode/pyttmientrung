<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SysMenu;
use App\Models\SysPosition;
use App\Models\Video;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class VideoController extends Controller
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



        $videos = Video::query()
            ->when($keyword, function ($query, $keyword) {
                $query->where('title', 'like', "%$keyword%");
            })
            ->orderByDesc('postdate')
            ->paginate($perPage)
            ->appends($request->only('search'));

        return view('admin.videos.index', compact('videos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('admin.videos.create');
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
            'title' => 'required|string|max:255',
            'pathfile' => 'required|string|max:255',
            'arrange' => 'nullable|integer',
            'approved' => 'required|boolean',
        ]);

        // Create new Video instance
        $video = new Video();

        $video->title = $validated['title'];
        $video->pathfile = $validated['pathfile']; // pathfile maps to url in DB
        $video->approved = $validated['approved'];
        $video->arrange = $validated['arrange'];
        $video->url = Str::slug($validated['title']);
        // Optional: set default values or other required fields
        $video->postdate = now();
        $video->view = 0;
        $video->typeid = null; // Set if needed
        $video->typefile = null;
        $video->summary = null;
        $video->lang = 'en'; // default lang

        $video->save();
        Alert::success(__('message.video.created_success'));

        return redirect('admin/videos');
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
        $video = Video::findOrFail($id);
        return view('admin.videos.show', compact('video'));
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
        $video = Video::findOrFail($id);

        return view('admin.videos.edit', compact('video'));
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
            'title' => 'required|string|max:255',
            'pathfile' => 'required|string|max:255',
            'arrange' => 'nullable|integer',
            'approved' => 'required|boolean',
        ]);

        $video = Video::findOrFail($id);

        $video->title = $validated['title'];
        $video->pathfile = $validated['pathfile']; // pathfile maps to url in DB
        $video->approved = $validated['approved'];
        $video->url = Str::slug($validated['title']);
        $video->arrange = $validated['arrange'];

        // Optional: keep unchanged or set default values
        $video->postdate = $video->postdate ?? now();
        $video->view = $video->view ?? 0;
        $video->typeid = $video->typeid ?? null;
        $video->typefile = $video->typefile ?? null;
        $video->summary = $video->summary ?? null;
        $video->lang = $video->lang ?? 'en';

        $video->save();
        Alert::success(__('message.video.updated_success'));

        return redirect()->route('videos.index')->with('success', 'Cập nhật menu thành công!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::destroy($id);

        Alert::success(trans('message.video.deleted_success'));


        // toastr()->success(trans('message.role.role.deleted_success'));

        return redirect('admin/videos');
    }

    public function updateArrange(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:sys_menu,id',
            'arrange' => 'required|integer',
        ]);

        $video = Video::findOrFail($request->id);
        $video->arrange = $request->arrange;
        $video->save();

        // Alert::success(__('message.menu.updated_success'));

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }
}
