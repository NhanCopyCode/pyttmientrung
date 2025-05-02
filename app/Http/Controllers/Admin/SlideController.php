<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FlashSlide;
use App\Traits\Authorizable;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    use Authorizable;

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;
        $slides = FlashSlide::paginate($perPage);


        return view('admin.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'arrange' => 'required|integer',
            'active' => 'required|boolean',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'arrange' => $validated['arrange'],
            'approved' => $validated['active'], // 'approved' field in DB
            'pubdate' => now(),
            'postdate' => now(),
            'author' => null, // fallback
            'typeid' => null, // default value if needed
            'title' => '',
            'link' => '',
            'lang' => app()->getLocale(), // or 'vi' if you default to Vietnamese
        ];

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = 'slide_' . time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/uploads/slides', $filename); // store inside storage/app/public/uploads/slides
            $data['pathimage'] = 'uploads/slides/' . $filename; // save relative path
        }

        FlashSlide::create($data);

        Alert::success(__('message.slide.created_success'));

        return redirect('admin/slides');
    }

    public function updateArrange(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:flashslide,id',
            'arrange' => 'required|integer',
        ]);

        $slide = FlashSlide::findOrFail($request->id);
        $slide->arrange = $request->arrange;
        $slide->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return void
     */
    public function show($id)
    {
        $slide = FlashSlide::findOrFail($id);

        return view('admin.slides.show', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return void
     */
    public function edit($id)
    {
        $slide = FlashSlide::findOrFail($id);

        return view('admin.slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $slide = FlashSlide::findOrFail($id);

        $validated = $request->validate([
            'arrange' => 'required|integer',
            'active' => 'required|boolean',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        // Cập nhật các field cơ bản
        $slide->arrange = $validated['arrange'];
        $slide->approved = $validated['active'];

        // Nếu có file avatar mới
        if ($request->hasFile('avatar')) {
            // Xóa file cũ nếu có
            if ($slide->pathimage && Storage::exists('public/' . $slide->pathimage)) {
                Storage::delete('public/' . $slide->pathimage);
            }

            // Lưu file mới
            $file = $request->file('avatar');
            $filename = 'slide_' . time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/uploads/slides', $filename);

            // Cập nhật đường dẫn mới
            $slide->pathimage = 'uploads/slides/' . $filename;
        }

        $slide->save();

        Alert::success(__('message.slide.updated_success'));

        return redirect()->route('slides.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return void
     */
    public function destroy($id)
    {
        FlashSlide::destroy($id);

        Alert::success(trans('message.slide.deleted_success'));


        // toastr()->success(trans('message.role.role.deleted_success'));

        return redirect('admin/slides');
    }
}
