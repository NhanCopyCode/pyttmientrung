@extends('theme::front-end.master')

@section('content')
    <div id="page_wrapper mt-4">
        <div id="wrapper_left">
            @include('theme::front-end.layouts.sidebar_left')


        </div>
        <div id="wrapper_center">
            @if (isset($faq))
                <div id="faq-detail" style="background-color: #f5f5f5; padding: 20px;">
                    <div class="panel" style="background: white; padding: 20px; border: 1px solid #ddd; border-radius: 6px;">
                        <h2 class="faq-question" style="font-weight: bold; color: #156aec;">
                            🟢 {{ strip_tags($faq->question) }}
                        </h2>

                        <div class="faq-answer" style="margin-top: 20px; font-size: 1rem; color: #333; line-height: 1.6;">
                            {!! html_entity_decode($faq->answer) !!}
                        </div>
                    </div>

                    <div style="margin-top: 30px;">
                        <a href="{{ url('/hoi-dap') }}" class="btn btn-primary"
                            style="color: white; background-color: #156aec; padding: 10px 15px; border-radius: 4px; display: inline-block;">
                            ← Quay lại danh sách Hỏi - Đáp
                        </a>
                    </div>
                </div>
            @else
                <div style="padding: 20px;">
                    <p>Không tìm thấy nội dung câu hỏi bạn yêu cầu.</p>
                    <a href="{{ url('/hoi-dap') }}">← Quay lại danh sách</a>
                </div>
            @endif




        </div>
        @include('theme::front-end.layouts.sidebar_right')
        <div class="clear"></div>
    </div>
@endsection
