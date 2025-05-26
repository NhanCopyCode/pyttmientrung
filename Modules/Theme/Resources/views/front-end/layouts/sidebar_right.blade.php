 <div id="wrapper_right">
     <div id="notice">
         <div class="panel">
             <div class="panel_tcat notice"
                 style="background: url(' {{ asset('img/icon_thongbao.png') }}') 5px 3px no-repeat #156aec;">
                 <a href="https://pyttmientrung.moh.gov.vn/c37/thong-bao.html">Thông báo</a>
             </div>
             <div class="smartmarquee example" style="height: 250px">
                 <ul class="container" style="margin-top: -266.038px;">
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-478/quyet-dinh-so-4083-qd-byt-ngay-31-12-2024-ve-viec-giao-du-toan-thu-chi-ngan-sach-nha-nuoc-nam-2025-cua-bo-truong-bo-y-te.html">
                             Quyết định số 4083/QĐ-BYT ngày 31/12/2024 về việc giao dự toán thu, chi ngân sách nhà
                             nước năm 2025 của Bộ Trưởng Bộ Y...</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-473/lich-tiep-cong-dan-cua-lanh-dao-trung-tam-nam-2025.html">Lịch
                             tiếp công dân của Lãnh đạo Trung tâm năm 2025</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-447/qd-4789-qd-byt-ve-viec-giao-du-toan-thu-chi-ngan-sach-nha-nuoc-nam-2024.html">QĐ
                             4789/QĐ-BYT về việc giao dự toán thu, chi ngân sách nhà nước năm 2024</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-432/quyet-dinh-so-4215-qd-byt-ngay-14-11-2023-cua-bo-truong-bo-y-te-ve-viec-dieu-chinh-du-toan-ngan-sach-nha-nuoc-nam-2023.html">
                             Quyết định số 4215/QĐ-BYT ngày 14/11/2023 của Bộ trưởng Bộ Y tế về việc điều chỉnh dự
                             toán ngân sách nhà nước...</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-430/quyet-dinh-giao-quyen-tu-chu-tai-chinh-2023.html">Quyết
                             định giao quyền tự chủ tài chính 2023</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-429/quyet-dinh-giao-du-toan-nam-2023.html">Quyết
                             định giao Dự toán năm 2023</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-425/thong-bao-ket-qua-trung-tuyen-vien-chuc-dot-2-nam-2023.html">Thông
                             báo kết quả trúng tuyển viên chức đợt 2 năm 2023</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-422/thong-bao-ve-viec-trieu-tap-thi-sinh-tham-du-ky-phong-van-xet-tuyen-vien-chuc-dot-2-nam-2023.html">Thông
                             báo về việc triệu tập thí sinh tham dự kỳ phỏng vấn xét tuyển viên chức đợt 2 năm
                             2023</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-421/noi-dung-on-tap-phong-van-tuyen-dung-vien-chuc-dot-2-nam-2023.html">Nội
                             dung ôn tập phỏng vấn tuyển dụng viên chức đợt 2 năm 2023</a> </li>
                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')"><a
                             href="https://pyttmientrung.moh.gov.vn/c37/t37-420/danh-sach-thi-sinh-du-dieu-kien-tieu-chuan-de-tham-du-tuyen-dung-vong-2.html">Danh
                             sách thí sinh đủ điều kiện, tiêu chuẩn để tham dự tuyển dụng vòng 2</a> </li>
                 </ul>
             </div>

         </div>
     </div>
     @include('theme::front-end.sections.ads_04')
     <div id="faqs">
         <div class="panel">
             <div class="panel_tcat faq"
                 style="background: url('{{ asset('img/faq.png') }}') 5px 3px no-repeat #156aec;">
                 <a href="{{ url('hoi-dap') }}">Hỏi - đáp</a>
             </div>

             <div class="swiper mySwiper" style="height: 330px;">
                 <div class="swiper-wrapper">
                     @foreach ($faqs_homepage as $faq)
                         <div class="swiper-slide" style="list-style: none; height: auto !important;">
                             <li
                                 style="list-style-image: url('{{ asset('img/dotter.png') }}'); list-style-position: inside; height: auto !important;">
                                 <a href="{{ url('hoi-dap?faq_id=' . $faq->id) }}">
                                     {{ \Illuminate\Support\Str::limit(strip_tags($faq->question), 150) }}
                                 </a>
                             </li>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>

     <script>
         const swiper = new Swiper('.mySwiper', {
             direction: 'vertical',
             loop: true,
             slidesPerView: 4,
             autoplay: {
                 delay: 3000,
                 disableOnInteraction: false,
             },
             allowTouchMove: false,
             pagination: false,
             navigation: false,
         });
     </script>

     <div id="ads_05">
         <div class="panel">
             @foreach ($ads_right_2 as $ad)
                 <div>
                     <a href="{{ $ad->link }}" target="_blank" title="{{ $ad->title }}">
                         <img src="{{ asset($ad->pathimage ?: 'templates/default/images/noimage.gif') }}"
                             style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="{{ $ad->title }}">
                     </a>
                 </div>
             @endforeach
         </div>
     </div>
     <div id="gallery">
         <script type="text/javascript"
             src="https://pyttmientrung.moh.gov.vn/templates/default/common/promotion/js/jcarousellite_1.0.1.pack.js"></script>
         <script type="text/javascript"
             src="https://pyttmientrung.moh.gov.vn/templates/default/common/promotion/js/captify.tiny.js"></script>
         <link rel="stylesheet" href="https://pyttmientrung.moh.gov.vn/templates/default/modules/home/style.css"
             type="text/css" media="screen">
         <div class="panel_tcat gallerys"
             style="background: url(' {{ asset('img/icon_gallery.png') }}') 5px 3px no-repeat #156aec;">
             <a href="/thu-vien-anh">Thư viện ảnh</a>
         </div>
         <div id="room_slide">
             <div id="list">
                 <div class="sliderroom"
                     style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 248px;">
                     <ul
                         style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 2585px; left: -984.631px;">

                     </ul>
                 </div>

                 <div class="clearfloat"></div>
             </div>
         </div>
         <script type="text/javascript">
             $(document).ready(function() {
                 $('img.captify').captify({
                     speedOver: 'fast',
                     speedOut: 'normal',
                     hideDelay: 500,
                     animation: 'slide',
                     prefix: '',
                     opacity: '0.7',
                     className: 'caption-bottom',
                     position: 'bottom'
                 });
             });
         </script>
     </div>
     <div id="video">
         <script src="/jscripts/swfobject.js" type="text/javascript"></script>
         <div class="panel_tcat videos"
             style="background: url(' {{ asset('img/icon_video.png') }}') 5px 3px no-repeat #156aec;">
             <a href="/video">Video</a>
         </div>
         <center>
             <div class="swiper mySwiper videoSwiper">
                 <div class="swiper-wrapper">
                     @foreach ($videos as $video)
                         <div class="swiper-slide">
                             <div class="video-container">
                                 <h5 style="font-size: 14px; font-weight: lighter; padding-top: 8px;">
                                     {{ $video->title }}</h5>

                                 @php
                                     parse_str(parse_url($video->pathfile, PHP_URL_QUERY), $queryParams);
                                     $youtubeId = $queryParams['v'] ?? null;
                                 @endphp

                                 @if ($youtubeId)
                                     <iframe width="100%" src="https://www.youtube.com/embed/{{ $youtubeId }}"
                                         frameborder="0"
                                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                         allowfullscreen>
                                     </iframe>
                                 @endif

                             </div>
                         </div>
                     @endforeach
                 </div>

                 <!-- Swiper navigation -->
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
             </div>


             <script>
                 var swiper = new Swiper(".videoSwiper", {
                     navigation: {
                         nextEl: ".swiper-button-next",
                         prevEl: ".swiper-button-prev",
                     },
                 });
             </script>
             {{-- <div id="container1" style="text-align: center;">Đang tải ...</div>
             <div style="color:#000000; text-align:center;"><b>Phóng sự nghiện game</b></div>
             <br>
             <script type="text/javascript">
                 $(document).ready(function() {
                     jwplayer("container1").setup({
                         flashplayer: "/jscripts/player.swf",
                         file: "http://www.youtube.com/watch?v=t6Ax4_kqBrM&feature=youtu.be",
                         image: "/upload/image/video/trung-tam-phap-y-tam-than-khu-vuc-mien-trung.jpg",
                         height: 160,
                         width: 248,
                         autostart: false,
                         repeat: "single",
                         controlbar: 'bottom'
                     });
                 });
             </script> --}}
         </center>
     </div>
     <div id="staitics">
         <div class="panel_tcat statitis"
             style="background: url(' {{ asset('img/icon_statitis.png') }}') 5px 3px no-repeat #156aec;">
             <a href="#">Thống kê truy cập</a>
         </div>
         <div style="float: left">
             <img border="0px" height="36px"
                 src="https://pyttmientrung.moh.gov.vn/templates/default/images/icon_star.png">
         </div>
         <div style="float: left; line-height: 38px">
             <span class="hitcounter_title">Lượt truy cập: </span>
             <span class="hitcounter_num">1563330</span>
         </div>
         <div style="float: left; width: 15px">
             &nbsp;
         </div>
         <div class="clear"></div>
         <div style="float: left">
             <img border="0px" height="36px"
                 src="https://pyttmientrung.moh.gov.vn/templates/default/images/icon_online.png">
         </div>
         <div style="float: left; line-height: 38px">
             <span class="hitcounter_title">Đang trực tuyến: </span>
             <span class="hitcounter_num">47</span>
         </div>

     </div>
 </div>
