<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 20;

        $faqs = Faq::query()
            ->when($keyword, function ($query, $keyword) {
                $query->where('question', 'like', "%$keyword%");
            })
            ->orderByDesc('postdate')
            ->paginate($perPage)
            ->appends($request->only('search'));
        $notApprovedCount = Faq::where('approved', '!=', config('settings.active'))->count();

        return view('admin.faqs.index', compact('faqs', 'notApprovedCount'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:1000',
            'answer' => 'required|string',
            'approved' => 'sometimes|boolean', 
        ]);

        $faq = new Faq([
            'question' => $validated['question'],   
            'answer'   => $validated['answer'],
            'approved' => $validated['approved'] ?? 0,
            'postdate' => now(),
            'lang' => 'vn',
        ]);

        $faq->save();

        Alert::success(__('message.faq.created_success'));

        return redirect()->route('faqs.index');
    }


    public function show($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faqs.show', compact('faq'));
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:1000',
            'answer' => 'required|string',
            'approved' => 'boolean',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->question = $validated['question'];
        $faq->answer = $validated['answer'];
        $faq->approved = $validated['approved'] ?? 0;
        $faq->lang = $faq->lang ?? 'en';

        $faq->save();

        Alert::success(__('message.faq.updated_success'));
        return redirect()->route('faqs.index')->with('success', 'Cập nhật FAQ thành công!');
    }

    public function destroy($id)
    {
        Faq::destroy($id);
        Alert::success(trans('message.faq.deleted_success'));
        return redirect('admin/faqs');
    }

    public function updateArrange(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:faqs,id',
            'arrange' => 'required|integer',
        ]);

        $faq = Faq::findOrFail($request->id);
        $faq->arrange = $request->arrange;
        $faq->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }
}
