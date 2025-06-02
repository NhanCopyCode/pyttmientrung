 <div id="wrapper_right">
     <div id="notice">
         {{-- <div class="panel">
             <div class="panel_tcat notice"
                 style="background: url('{{ asset('img/icon_thongbao.png') }}') 5px 3px no-repeat #156aec;">
                 <a href="https://pyttmientrung.moh.gov.vn/c37/thong-bao.html">Thông báo</a>
             </div>

             <div class="swiper vertical-notice" style="height: 250px;">
                 <div class="swiper-wrapper">
                     @foreach ($notices as $item)
                         <div class="swiper-slide">
                             <li style="list-style-image: url('{{ asset('img/dotter.png') }}')">
                                 <a href="{{ url('bai-viet/' .$item->url) }}">
                                     {{ \Illuminate\Support\Str::limit($item->title, 100) }}
                                 </a>
                             </li>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div> --}}
         @foreach ($menu_panel_phai as $menu)
             @if ($menu->posts->isNotEmpty())
                 <div class="panel">
                     <div class="panel_tcat notice"
                         style="background: url('{{ asset('img/icon_thongbao.png') }}') 5px 3px no-repeat #156aec;">
                         <a href="{{ url('chuyen-muc/' . $menu->url) }}">{{ $menu->title }}</a>
                     </div>

                     <div class="swiper vertical-notice" style="height: 250px;">
                         <div class="swiper-wrapper">
                             @foreach ($menu->posts as $post)
                                 <div class="swiper-slide">
                                     <li style="list-style-image: url('{{ asset('img/dotter.png') }}')">
                                         <a href="{{ url('bai-viet/' . $post->url) }}">
                                             {{ \Illuminate\Support\Str::limit($post->title, 100) }}
                                         </a>
                                     </li>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
             @endif
         @endforeach
     </div>
     <script>
         new Swiper('.vertical-notice', {
             direction: 'vertical',
             slidesPerView: 4,
             spaceBetween: 10,
             loop: true,
             autoplay: {
                 delay: 3000,
                 disableOnInteraction: false,
             },
             speed: 500,
             allowTouchMove: false,
         });
     </script>

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
