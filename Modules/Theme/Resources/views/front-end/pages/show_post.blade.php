@extends('theme::front-end.master')

@section('content')
    <div id="page_wrapper mt-4">
        <div id="wrapper_left">
            @include('theme::front-end.layouts.sidebar_left')

            <div id="ads_01">
                <div class="panel">
                    <div>
                        <a href="http://moh.gov.vn/Pages/Index.aspx" target="_blank" title="Bộ y tế"><img
                                src="/upload/image/quangcao/adv_01_01.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Bộ y tế"></a>
                    </div>
                    <div>
                        <a href="http://moj.gov.vn/Pages/home.aspx" target="_blank" title="Bộ tư pháp"><img
                                src="/upload/image/quangcao/adv_01_02.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Bộ tư pháp"></a>
                    </div>
                    <div>
                        <a href="http://www.thuathienhue.gov.vn/vi-vn/" target="_blank" title="Cổng thông tin điện tử"><img
                                src="/upload/image/quangcao/adv_01_03.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;"
                                alt="Cổng thông tin điện tử"></a>
                    </div>
                    <div>
                        <a href="http://vienphapytamthantrunguong.com.vn/default.asp" target="_blank"
                            title="Viện giám định"><img src="/upload/image/quangcao/adv_01_04.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Viện giám định"></a>
                    </div>
                    <div>
                        <a href="http://www.bvtttw1.gov.vn/" target="_blank" title="BV Tâm thần"><img
                                src="/upload/image/quangcao/adv_01_05.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="BV Tâm thần"></a>
                    </div>
                    <div>
                        <a href="http://www.bvtwhue.com.vn/index.asp?lang=vn" target="_blank"
                            title="Bênh viện Trung Ương"><img src="/upload/image/quangcao/adv_01_06.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Bênh viện Trung Ương"></a>
                    </div>
                    <div>
                        <a href="http://stp.thuathienhue.gov.vn/" target="_blank" title="Sở tư pháp"><img
                                src="/upload/image/quangcao/adv_01_07.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Sở tư pháp"></a>
                    </div>
                    <div>
                        <a href="http://syt.thuathienhue.gov.vn/" target="_blank" title="Sở Y Tế"><img
                                src="/upload/image/quangcao/adv_01_08.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Sở Y Tế"></a>
                    </div>
                    <div>
                        <a href="http://bvtthan.thuathienhue.gov.vn/" target="_blank" title="Bệnh viện tâm thần"><img
                                src="/upload/image/quangcao/adv_01_09.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Bệnh viện tâm thần"></a>
                    </div>
                    <div>
                        <a href="http://www.huemed-univ.edu.vn/" target="_blank" title="Trường Đại học Y Dược Huế"><img
                                src="/upload/image/quangcao/adv_01_10.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;"
                                alt="Trường Đại học Y Dược Huế"></a>
                    </div>
                    <div>
                        <a href="http://www.cimsi.org.vn/" target="_blank" title="Thông tin Y học Việt Nam"><img
                                src="/upload/image/quangcao/adv_01_11.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;"
                                alt="Thông tin Y học Việt Nam"></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrapper_center">

            <div class="post_content">
                <div class="d-flex align-items-center justify-content-end" style="margin-bottom: 20px;">
                    <span>{{ $post->postdate }}</span>
                </div>
                <h3>{{ $post->title }}</h3>
                <img src="{{ asset($post->pathimage) }}" alt="{{ $post->title }}">
                <p>{!! html_entity_decode($post->summary) !!}</p>
                {!! html_entity_decode($post->content) !!}
            </div>
            @if ($relatedPosts->isNotEmpty())
                <ul class="list-related-post" style="margin-top: 20px; list-style: decimal;">
                    <h5>Bài viết liên quan:</h5>
                    @foreach ($relatedPosts as $related)
                        <li>
                            <a style="text-transform: uppercase" href="{{ url('bai-viet/' . $related->url) }}">{{ $related->title }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif



        </div>
        @include('theme::front-end.layouts.sidebar_right')
        <div class="clear"></div>
    </div>
@endsection
