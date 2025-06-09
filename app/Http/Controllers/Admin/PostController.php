<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Post;
use App\Models\PositionAds;
use App\Models\SysMenu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $typeid = $request->get('ptypeid'); 
        $perPage = 20;

        $posts = Post::query()
            ->when($keyword, function ($query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('title', 'like', "%$keyword%")
                        ->orWhere('summary', 'like', "%$keyword%");
                });
            })
            ->when($typeid, function ($query, $typeid) {
                $query->where('typeid', $typeid);
            })
            ->orderBy('postdate', 'desc')
            ->paginate($perPage)
            ->appends($request->only('search', 'typeid'));

        $parents = SysMenu::with('children')
            ->where('ptypeid', 0)
            ->orderBy('arrange')
            ->get();

        $list_menu = [];

        foreach ($parents as $parent) {
            $list_menu[$parent->id] = $parent->title;

            foreach ($parent->children as $child) {
                $list_menu[$child->id] = '-- ' . $child->title;
            }
        }

        return view('admin.posts.index', compact('posts', 'list_menu'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = SysMenu::with('children')
            ->where('ptypeid', 0)
            ->orderBy('arrange')
            ->get();

        $list_menu = [];

        foreach ($parents as $parent) {
            $list_menu[$parent->id] = $parent->title;

            foreach ($parent->children as $child) {
                $list_menu[$child->id] = '-- ' . $child->title;
            }
        }

        return view('admin.posts.create', compact('list_menu'));
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
            'title'     => 'required|string|max:255',
            'ptypeid'    => 'required|integer',
            'avatar'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'content'   => 'nullable|string',
            'summary'   => 'nullable|string|max:255',
            'approved'  => 'sometimes|boolean',
        ]);

        $post = new Post();

        $post->title     = $validated['title'];
        $post->url = Str::slug($validated['title']) . '-' . now()->format('YmdHis');

        $post->typeid    = $validated['ptypeid'];
        $post->content   = $validated['content'] ?? null;
        $post->summary   = $validated['summary'] ?? null;
        $post->arrange   = 0;
        $post->approved  = $validated['approved'] ?? 0;
        $post->postdate = now();
        $post->author = 'Administrator';
        $post->lang = 'vn';

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/posts'), $imageName);
            $post->pathimage = 'uploads/posts/' . $imageName;
        }

        $post->save();
        Alert::success(__('message.post.created_success'));

        return redirect('admin/posts');
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
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
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
        $post = Post::findOrFail($id);
        $list_menu = [];
        $parents = SysMenu::with('children')
            ->where('ptypeid', 0)
            ->orderBy('arrange')
            ->get();
        foreach ($parents as $parent) {
            $list_menu[$parent->id] = $parent->title;

            foreach ($parent->children as $child) {
                $list_menu[$child->id] = '-- ' . $child->title;
            }
        }
        // dd($post, $parents);

        return view('admin.posts.edit', compact('post', 'list_menu'));
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
            'title'     => 'required|string|max:255',
            'ptypeid'    => 'required|integer',
            'avatar'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'content'   => 'nullable|string',
            'summary'   => 'nullable|string|max:255',
            'approved'  => 'sometimes|boolean',
        ]);

        $post = Post::findOrFail($id);

        $post->title     = $validated['title'];
        $post->url = Str::slug($validated['title']) . '-' . now()->format('YmdHis');

        $post->typeid    = $validated['ptypeid'];
        $post->content   = $validated['content'] ?? null;
        $post->summary   = $validated['summary'] ?? null;
        $post->arrange   =  0;
        $post->approved  = $validated['approved'] ?? 0;
        $post->changedate = now();
        $post->author    = 'Administrator';
        $post->lang      = 'vn';

        if ($request->hasFile('avatar')) {

            if (!empty($post->pathimage) && file_exists(public_path($post->pathimage))) {
                @unlink(public_path($post->pathimage));
            }

            $image = $request->file('avatar');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/posts'), $imageName);
            $post->pathimage = 'uploads/posts/' . $imageName;
        }

        $post->save();
        Alert::success(__('message.post.updated_success'));

        return redirect()->route('posts.index')->with('success', 'Cập nhật bài viết thành công!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        Alert::success(trans('message.post.deleted_success'));
        return redirect('admin/posts');
    }

    public function updateArrange(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:contents,id',
            'arrange' => 'required|integer',
        ]);

        $post = Post::findOrFail($request->id);
        $post->arrange = $request->arrange;
        $post->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }
}
