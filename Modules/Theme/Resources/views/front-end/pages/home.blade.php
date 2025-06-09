@php
    use App\Models\SysMenu;
@endphp

@extends('theme::front-end.master')

@section('content')
    <div id="page_wrapper mt-4">
        <div id="wrapper_left">
            @include('theme::front-end.layouts.sidebar_left')

        </div>
        <div id="wrapper_center">
            @if (isset($search_result) && count($search_result) == 0)
                <div class="panel">
                    <h2 style="text-align: center;">Không tìm thấy kết quả nào cho từ khóa: {{ request()->input('s') }}
                    </h2>
                </div>
            @endif
            @if (isset($search_result) && $search_result->isNotEmpty())
                <div class="panel">
                    <h2 style="text-align: center;">Kết quả tìm kiếm: {{ request()->input('s') }} </h2>
                    <ul>
                        @foreach ($search_result as $result)
                            <li style=" margin: 12px 0;">
                                <a style="font-size: 14px;"
                                    href="{{ url('bai-viet/' . $result->url) }}">{{ $result->title }}</a>
                                <div style="font-size: 13px;">{!! html_entity_decode($result->summary) !!}</div>
                            </li>
                        @endforeach
                    </ul>

                    <div class="pagination-wrapper" style="text-align: center; margin-top: 20px;">
                        {{ $search_result->links() }}
                    </div>
                </div>
            @endif


            {{-- @if ($posts_trang_chu->isNotEmpty())
                @php

                    // $firstMenu = $posts_trang_chu->first();
                    $childPosts = $firstMenu->children->flatMap(function ($child) {
                        return $child->posts;
                    });

                    $posts = $childPosts->sortByDesc('postdate')->take(7);
                @endphp

                @if ($posts->isNotEmpty())

                    <div class="box-container1">
                        <div class="box-cat">
                            <div class="box-header">
                                <h2>
                                    <a class="title"
                                        href="{{ $firstMenu->url ? url('bai-viet/' . $firstMenu->url) : '#' }}">
                                        {{ $firstMenu->title }}
                                    </a>
                                </h2>

                            </div>
                            <div id="slider">
                                <ul>
                                    @foreach ($posts as $post)
                                        <li style="float: left;">
                                            <a href="{{ $post->url ? url('bai-viet/' . $post->url) : '#' }}">
                                                <img src="{{ $post->image_url }}" width="413" height="232px"
                                                    border="0" />
                                            </a>
                                            <a class="first-item-link1"
                                                href="{{ $post->url ? url('bai-viet/' . $post->url) : '#' }}">
                                                {{ Str::limit($post->title, 100) }}
                                            </a>
                                            <p style="min-height: 50px;">{{ Str::limit($post->summary, 150) }}</p>
                                        </li>
                                    @break
                                @endforeach
                            </ul>
                        </div>
                        <span id="prevBtn"><a href="javascript:void(0);">Previous</a></span>
                        <span id="nextBtn"><a href="javascript:void(0);">Next</a></span>

                        @php
                            $postsWithoutFirst = $posts->slice(1);

                        @endphp
                        @foreach ($postsWithoutFirst as $post)
                            <div class="list-next1">
                                <a
                                    href="{{ $post->url ? url('bai-viet/' . $post->url) : '#' }}">{{ Str::limit($post->title, 100) }}</a>
                            </div>
                        @endforeach


                        <div style="clear:both;"></div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            @endif
        @endif --}}
        {{-- <div class="box-container1">

            <div class="box-cat">
                <div class="box-header">
                    <h2><a class="title" href="https://pyttmientrung.moh.gov.vn/c24/tin-tuc--su-kien.html">Tin tức -
                            Sự kiện</a></h2>
                </div>
                <div id="slider"
                    style="padding: 10px 0px 0px; margin: 0px; height: 357px; float: left; width: 413px; text-align: justify; overflow: hidden;">
                    <ul style="width: 2891px; margin-left: -1239px;">
                        <li style="margin-left: -413px; float: left;"><a
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-476/cong-doan-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-cham-lo-tet-nguyen-dan-at-ty-2025-cho-doan-vien-cong-doan.html"><img
                                    src="/upload/image/nam2025/cdcstet/3.jpg" width="413" height="232px"
                                    border="0"></a> <a class="first-item-link1"
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-476/cong-doan-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-cham-lo-tet-nguyen-dan-at-ty-2025-cho-doan-vien-cong-doan.html">
                                CÔNG ĐOÀN TRUNG TÂM PHAP Y TÂM THẦN KHU VỰC MIỀN TRUNG CHĂM LO TẾT NGUYÊN ĐÁN ẤT TỴ 2025
                                CHO ĐOÀN VIÊN...</a>
                            <p>Thực hiện kế hoạch số 60/KH-CĐYT ngày 09/10/2024 của Ban Thường vụ Công đoàn Y tế Việt
                                Nam về việc tổ chức chăm lo cho đoàn viên, người lao động nhân dịp tết Nguyên Đán Ất Tỵ
                                2025. </p>
                        </li>
                        <li style="float: left;"><a
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-480/chao-mung-ky-niem-70-nam-ngay-thay-thuoc-viet-nam-27-02-1955--27-02-2025-.html"><img
                                    src="/upload/image/nam2025/toadam272/ava.jpg" width="413" height="232px"
                                    border="0"></a> <a class="first-item-link1"
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-480/chao-mung-ky-niem-70-nam-ngay-thay-thuoc-viet-nam-27-02-1955--27-02-2025-.html">CHÀO
                                MỪNG KỶ NIỆM 70 NĂM NGÀY THẦY THUỐC VIỆT NAM (27/02/1955 - 27/02/2025)</a>
                            <p> Năm 2025, đánh dấu tròn 70 năm Bác Hồ gửi thư đến ngành Y tế, một sự kiện mang ý nghĩa
                                sâu sắc nhân Ngày Thầy thuốc Việt Nam (27/02/1995 - 27/02/2025) và chặng đường 10 năm
                                thành lập Trung tâm Pháp y...</p>
                        </li>
                        <li style="float: left;"><a
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-479/gap-mat-dau-nam-xuan-at-ty-nam-2025.html"><img
                                    src="/upload/image/nam2025/tet2025/bs-nguyen.jpg" width="413" height="232px"
                                    border="0"></a> <a class="first-item-link1"
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-479/gap-mat-dau-nam-xuan-at-ty-nam-2025.html">GẶP
                                MẶT ĐẦU NĂM XUÂN ẤT TỴ NĂM 2025</a>
                            <p> Hòa chung không khí đón Xuân của cả nước, Kỷ niệm 95 năm ngày thành lập Đảng Cộng
                                sản Việt Nam (03/02/1930 - 03/02/2025) sáng 03/02/2025 (mùng 6 Tết), Trung tâm Pháp y
                                tâm thần khu vực Miền Trung tổ...</p>
                        </li>
                        <li style="float: left;"><a
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-477/hoi-nghi-tong-ket-hoat-dong-cong-doan-nam-2024-va-trien-khai-ke-hoach-hoat-dong-nam-2025.html"><img
                                    src="/upload/image/nam2025/tkcdcs/chi-hai-cdcs.jpg" width="413" height="232px"
                                    border="0"></a> <a class="first-item-link1"
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-477/hoi-nghi-tong-ket-hoat-dong-cong-doan-nam-2024-va-trien-khai-ke-hoach-hoat-dong-nam-2025.html">HỘI
                                NGHỊ TỔNG KẾT HOẠT ĐỘNG CÔNG ĐOÀN NĂM 2024 VÀ TRIỂN KHAI KẾ HOẠCH HOẠT ĐỘNG NĂM 2025</a>
                            <p> Trong không khí vui tươi, phấn khởi chuẩn bị đón Tết Nguyên đán Ất Tỵ năm 2025, được sự
                                đồng ý của Bí thư chi bộ, Giám đốc Trung tâm, sáng ngày 23/01/2025, Công đoàn cơ sở
                                Trung tâm Pháp y tâm...</p>
                        </li>
                        <li style="float: left;"><a
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-475/hoi-nghi-tong-ket-hoat-dong-nam-2024-trien-khai-nhiem-vu-nam-2025-cua-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-.html"><img
                                    src="/upload/image/nam2025/tkhoatdong/ava.jpg" width="413" height="232px"
                                    border="0"></a> <a class="first-item-link1"
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-475/hoi-nghi-tong-ket-hoat-dong-nam-2024-trien-khai-nhiem-vu-nam-2025-cua-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-.html">
                                HỘI NGHỊ TỔNG KẾT HOẠT ĐỘNG NĂM 2024, TRIỂN KHAI NHIỆM VỤ NĂM 2025 CỦA TRUNG TÂM PHÁP Y
                                TÂM THẦN KHU...</a>
                            <p> Trong không khí phấn khởi, rộn ràng của những ngày cận kề dịp tết Nguyên đán Ất Tỵ 2025;
                                hòa chúng niềm vui với sự kiện Huế trở thành Thành phố trực thuộc Trung ương. Sáng ngày
                                17/01/2024, Trung...</p>
                        </li>
                        <li style="float: left;"><a
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-474/hoi-nghi-vien-chuc-va-nguoi-lao-dong-nam-2025.html"><img
                                    src="/upload/image/nam2025/hnvc/ava.jpg" width="413" height="232px"
                                    border="0"></a> <a class="first-item-link1"
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-474/hoi-nghi-vien-chuc-va-nguoi-lao-dong-nam-2025.html">HỘI
                                NGHỊ VIÊN CHỨC VÀ NGƯỜI LAO ĐỘNG NĂM 2025</a>
                            <p> Thực hiện hướng dẫn số 1380/HD-BYT-CDYT ngày 23/10/2024 về việc tổ chức Hội nghị cán bộ,
                                công chức, viên chức, người lao động và hoạt động của Ban Thanh tra nhân dân tại cơ quan
                                Hành chính nhà...</p>
                        </li>
                        <li style="float: left;"><a
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-476/cong-doan-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-cham-lo-tet-nguyen-dan-at-ty-2025-cho-doan-vien-cong-doan.html"><img
                                    src="/upload/image/nam2025/cdcstet/3.jpg" width="413" height="232px"
                                    border="0"></a> <a class="first-item-link1"
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-476/cong-doan-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-cham-lo-tet-nguyen-dan-at-ty-2025-cho-doan-vien-cong-doan.html">
                                CÔNG ĐOÀN TRUNG TÂM PHAP Y TÂM THẦN KHU VỰC MIỀN TRUNG CHĂM LO TẾT NGUYÊN ĐÁN ẤT TỴ 2025
                                CHO ĐOÀN VIÊN...</a>
                            <p>Thực hiện kế hoạch số 60/KH-CĐYT ngày 09/10/2024 của Ban Thường vụ Công đoàn Y tế Việt
                                Nam về việc tổ chức chăm lo cho đoàn viên, người lao động nhân dịp tết Nguyên Đán Ất Tỵ
                                2025. </p>
                        </li>
                        <li style="float: left;"><a
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-480/chao-mung-ky-niem-70-nam-ngay-thay-thuoc-viet-nam-27-02-1955--27-02-2025-.html"><img
                                    src="/upload/image/nam2025/toadam272/ava.jpg" width="413" height="232px"
                                    border="0"></a> <a class="first-item-link1"
                                href="https://pyttmientrung.moh.gov.vn/c39/t39-480/chao-mung-ky-niem-70-nam-ngay-thay-thuoc-viet-nam-27-02-1955--27-02-2025-.html">CHÀO
                                MỪNG KỶ NIỆM 70 NĂM NGÀY THẦY THUỐC VIỆT NAM (27/02/1955 - 27/02/2025)</a>
                            <p> Năm 2025, đánh dấu tròn 70 năm Bác Hồ gửi thư đến ngành Y tế, một sự kiện mang ý nghĩa
                                sâu sắc nhân Ngày Thầy thuốc Việt Nam (27/02/1995 - 27/02/2025) và chặng đường 10 năm
                                thành lập Trung tâm Pháp y...</p>
                        </li>
                    </ul>
                </div> <span id="prevBtn"><a href="javascript:void(0);">Previous</a></span> <span id="nextBtn"><a
                        href="javascript:void(0);">Next</a></span>
                <div class="list-next1"> <a
                        href="https://pyttmientrung.moh.gov.vn/c24/t24-480/chao-mung-ky-niem-70-nam-ngay-thay-thuoc-viet-nam-27-02-1955--27-02-2025-.html">CHÀO
                        MỪNG KỶ NIỆM 70 NĂM NGÀY THẦY THUỐC VIỆT NAM (27/02/1955 - 27/02/2025)</a></div>


                <div class="list-next1"> <a
                        href="https://pyttmientrung.moh.gov.vn/c24/t24-479/gap-mat-dau-nam-xuan-at-ty-nam-2025.html">GẶP
                        MẶT ĐẦU NĂM XUÂN ẤT TỴ NĂM 2025</a></div>


                <div class="list-next1"> <a
                        href="https://pyttmientrung.moh.gov.vn/c24/t24-477/hoi-nghi-tong-ket-hoat-dong-cong-doan-nam-2024-va-trien-khai-ke-hoach-hoat-dong-nam-2025.html">HỘI
                        NGHỊ TỔNG KẾT HOẠT ĐỘNG CÔNG ĐOÀN NĂM 2024 VÀ TRIỂN KHAI KẾ HOẠCH HOẠT ĐỘNG NĂM 2025</a></div>


                <div class="list-next1"> <a
                        href="https://pyttmientrung.moh.gov.vn/c24/t24-475/hoi-nghi-tong-ket-hoat-dong-nam-2024-trien-khai-nhiem-vu-nam-2025-cua-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-.html">
                        HỘI NGHỊ TỔNG KẾT HOẠT ĐỘNG NĂM 2024, TRIỂN KHAI NHIỆM VỤ NĂM 2025 CỦA TRUNG TÂM PHÁP Y
                        TÂM...</a></div>


                <div class="list-next1"> <a
                        href="https://pyttmientrung.moh.gov.vn/c24/t24-474/hoi-nghi-vien-chuc-va-nguoi-lao-dong-nam-2025.html">HỘI
                        NGHỊ VIÊN CHỨC VÀ NGƯỜI LAO ĐỘNG NĂM 2025</a></div>


                <div class="list-next1"> <a
                        href="https://pyttmientrung.moh.gov.vn/c24/t24-476/cong-doan-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-cham-lo-tet-nguyen-dan-at-ty-2025-cho-doan-vien-cong-doan.html">
                        CÔNG ĐOÀN TRUNG TÂM PHAP Y TÂM THẦN KHU VỰC MIỀN TRUNG CHĂM LO TẾT NGUYÊN ĐÁN ẤT TỴ 2025 CHO
                        ĐOÀN...</a></div>


                <div style="clear:both;"></div>
            </div>

            <div style="clear:both;"></div>
        </div> --}}
        <script type="text/javascript">
            $(document).ready(function() {
                $("#slider").easySlider({
                    auto: true,
                    continuous: true,
                    speed: 800,
                    pause: 4000
                });
            });
        </script>


        {{-- <div class="box-container1">

            @foreach ($list_post_trang_chu as $outerIndex => $item)
                @if (!empty($item['posts']) && $item['posts']->isNotEmpty())
                    <div class="box-cat">
                        <div class="box-header">
                            <h2>
                                <a class="title" href="{{ $item['parent']->url }}">{{ $item['parent']->title }}</a>
                            </h2>
                        </div>

                        @foreach ($item['posts'] as $postIndex => $post)
                            @if ($postIndex === 0)
                                <div class="list-item-first">
                                    <a href="{{ url('/bai-viet/' . $post->url) }}">
                                        <img align="left" class="image-left"
                                            src="{{ asset($post->pathimage ?? '/uploads/image/default.jpg') }}"
                                            width="180" border="0">
                                    </a>
                                    <a class="first-item-link" href="{{ url('/bai-viet/' . $post->url) }}">
                                        {{ Str::limit($post->title, 150) }}
                                    </a>
                                    <p>{{ Str::limit($post->summary, 190) }}</p><br>
                                </div>
                                <div style="clear:both;"></div>
                            @else
                                <div class="list-next">
                                    <a href="{{ url('/bai-viet/' . $post->url) }}">
                                        {{ Str::limit($post->title, 120) }}
                                    </a>
                                </div>
                                <div style="clear:both;"></div>
                            @endif
                        @endforeach

                        @if (isset($ads_main_2[$outerIndex]))
                            @php $ad = $ads_main_2[$outerIndex]; @endphp
                            <div style="clear:both;"></div>
                            <div class="panel">
                                <div>
                                    <a href="{{ $ad->link }}" target="_blank" title="{{ $ad->title }}">
                                        <img src="{{ asset($ad->pathimage ?? '/uploads/image/default.jpg') }}"
                                            style="border: solid 1px #CCCCCC;width: 650px;height: auto;"
                                            alt="{{ $ad->title }}">
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
            <div style="clear:both;"></div>

        </div><br> --}}
        @if ($list_post_trang_chu && count($list_post_trang_chu))
            @php
                $firstItem = $list_post_trang_chu[0];
                $firstMenu = $firstItem['parent'];
                $childPosts = $firstItem['posts'];
                $posts = $childPosts->sortByDesc('postdate')->take(7)->values();
            @endphp

            @if ($posts->isNotEmpty())
                <div class="box-container1">
                    <div class="box-cat">
                        <div class="box-header">
                            <h2>
                                <a class="title"
                                    href="{{ $firstMenu->url ? url('bai-viet/' . $firstMenu->url) : '#' }}">
                                    {{ $firstMenu->title }}
                                </a>
                            </h2>
                        </div>

                        <div id="slider">
                            <ul>
                                @foreach ($posts as $index => $post)
                                    @if ($index === 0)
                                        <li style="float: left;">
                                            <a href="{{ $post->url ? url('bai-viet/' . $post->url) : '#' }}">
                                                <img src="{{ $post->image_url }}" width="413" height="232px"
                                                    border="0" />
                                            </a>
                                            <a class="first-item-link1"
                                                href="{{ $post->url ? url('bai-viet/' . $post->url) : '#' }}">
                                                {{ Str::limit($post->title, 100) }}
                                            </a>
                                            <p style="min-height: 50px;">{{ Str::limit($post->summary, 150) }}</p>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <span id="prevBtn"><a href="javascript:void(0);">Previous</a></span>
                        <span id="nextBtn"><a href="javascript:void(0);">Next</a></span>


                        @php
                            $postsWithoutFirst = $posts->slice(1);
                        @endphp


                        @foreach ($postsWithoutFirst as $post)
                            <div class="list-next1">
                                <a href="{{ $post->url ? url('bai-viet/' . $post->url) : '#' }}">
                                    {{ Str::limit($post->title, 100) }}
                                </a>
                            </div>
                        @endforeach

                        <div style="clear:both;"></div>
                        {{-- Display ads_main_1 --}}
                        <div class="panel">
                            @foreach ($ads_main_1 as $ad)
                                <a href="{{ $ad->link }}" target="_blank" title="{{ $ad->title }}">
                                    <img src="{{ asset($ad->pathimage) }}" style="width: 650px;height: auto;"
                                        alt="{{ $ad->title }}">
                                </a>
                            @endforeach

                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            @endif
        @endif

        <br>

        @if (count($list_post_trang_chu) > 1)
            <div class="box-container1">
                @foreach ($list_post_trang_chu as $outerIndex => $item)
                    @if ($outerIndex === 0)
                        @continue
                    @endif

                    @if (!empty($item['posts']) && $item['posts']->isNotEmpty())
                        <div class="box-cat">
                            <div class="box-header">
                                <h2>
                                    <a class="title" href="{{ $item['parent']->url }}">
                                        {{ $item['parent']->title }}
                                    </a>
                                </h2>
                            </div>

                            @foreach ($item['posts'] as $postIndex => $post)
                                @if ($postIndex === 0)
                                    <div class="list-item-first">
                                        <a href="{{ url('/bai-viet/' . $post->url) }}">
                                            <img align="left" class="image-left"
                                                src="{{ asset($post->pathimage ?? '/uploads/image/default.jpg') }}"
                                                width="180" border="0">
                                        </a>
                                        <a class="first-item-link" href="{{ url('/bai-viet/' . $post->url) }}">
                                            {{ Str::limit($post->title, 150) }}
                                        </a>
                                        <p>{{ Str::limit($post->summary, 190) }}</p><br>
                                    </div>
                                    <div style="clear:both;"></div>
                                @else
                                    <div class="list-next">
                                        <a href="{{ url('/bai-viet/' . $post->url) }}">
                                            {{ Str::limit($post->title, 120) }}
                                        </a>
                                    </div>
                                    <div style="clear:both;"></div>
                                @endif
                            @endforeach
                         
                            @if (isset($ads_main_2[$outerIndex - 1]))
                                @php $ad = $ads_main_2[$outerIndex - 1]; @endphp
                                <div style="clear:both;"></div>
                                <div class="panel">
                                    <div>
                                        <a href="{{ $ad->link }}" target="_blank" title="{{ $ad->title }}">
                                            <img src="{{ asset($ad->pathimage ?? '/uploads/image/default.jpg') }}"
                                                style="border: solid 1px #CCCCCC;width: 650px;height: auto;"
                                                alt="{{ $ad->title }}">
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                @endforeach
                <div style="clear:both;"></div>
            </div><br>
        @endif



    </div>
    @include('theme::front-end.layouts.sidebar_right')
    <div class="clear"></div>
</div>


@endsection
