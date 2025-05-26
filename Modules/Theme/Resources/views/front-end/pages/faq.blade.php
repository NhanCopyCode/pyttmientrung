@extends('theme::front-end.master')

@section('content')
    <div id="page_wrapper mt-4">
        <div id="wrapper_left">
            @include('theme::front-end.layouts.sidebar_left')


        </div>
        <div id="wrapper_center">
            <div id="faq-submit-form"
                style="margin-bottom: 30px; background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 6px;">
                <h3 style="margin-bottom: 15px; color: #156aec;">Gửi câu hỏi của bạn</h3>

                @if (session('success'))
                    <div style="color: green; margin-bottom: 10px;">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('faq.submit') }}">
                    @csrf

                    <div style="margin-bottom: 15px;">
                        <label for="name">Họ tên:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                        @error('name')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                        @error('email')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="question">Câu hỏi:</label>
                        <textarea name="question" id="question" rows="4" required
                            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">{{ old('question') }}</textarea>
                        @error('question')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        style="background-color: #156aec; color: white; padding: 10px 20px; border: none; border-radius: 4px;">
                        Gửi câu hỏi
                    </button>
                </form>

            </div>

            @if (isset($faqs) && $faqs->count() > 0)
                <div id="faqs">
                    <div class="panel">
                        <div class="panel_tcat faq"
                            style="background: url('{{ asset('img/faq.png') }}') 5px 3px no-repeat #156aec; color: white; padding-left: 30px;">
                            <a href="{{ url('c58/hoi--dap.html') }}" style="color: #fff;">Hỏi - đáp</a>
                        </div>

                        <div class="faq-list" style=" padding: 10px; background-color: #f5f5f5;">
                            @foreach ($faqs->take(5) as $faq)
                                <div class="faq-item"
                                    style="margin-bottom: 15px; padding: 10px; background: white; border: 1px solid #ddd; border-radius: 4px;">
                                    <a href={{ url('hoi-dap') . '?faq_id=' . $faq->id }} class="faq-question"
                                        style="display: inline-block; font-weight: bold; margin-bottom: 5px;">
                                        🟢 {{ strip_tags($faq->question) }}
                                    </a>
                                    <div class="faq-answer" style="font-size: 0.95em; color: #333; margin-top: 20px;">
                                        {!! html_entity_decode($faq->answer) !!}
                                    </div>
                                </div>
                            @endforeach
                            <div class="pagination" style="margin-top: 20px;">
                                {{ $faqs->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            @endif





        </div>
        @include('theme::front-end.layouts.sidebar_right')
        <div class="clear"></div>
    </div>
@endsection
