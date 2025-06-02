@extends('layouts.app')

@section('content')
    <div id="page_wrapper">
        @include('theme::front-end.layouts.sidebar_left')
        <div id="wrapper_left">
            <div id="menu_left">
                <div class="clear"></div>
                <div class="leftmenu">
                    <div class="sidebarmenu">
                        <ul id="sidebarmenu1">
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c11/gioi-thieu.html"
                                    class=" subfolderstyle">Giới thiệu</a>
                                <ul class="fly" style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c12/lich-su-hinh-thanh.html">Lịch sử hình
                                            thành</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c13/so-do-to-chuc.html">Sơ đồ tổ chức</a>
                                    </li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c14/chuc-nang-nhiem-vu-quyen-han.html">Chức
                                            năng, nhiệm vụ, quyền hạn</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c26/cac-khoa-phong.html">Các khoa,
                                            phòng</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c38/thanh-tich-dat-duoc.html">Thành tích
                                            đạt được</a></li>
                                </ul>
                            </li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c24/tin-tuc--su-kien.html"
                                    class=" subfolderstyle">Tin tức - Sự kiện</a>
                                <ul class="fly" style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c39/tin-hoat-dong.html">Tin hoạt động</a>
                                    </li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c40/tin-trong-nganh.html">Tin trong
                                            ngành</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c41/tin-quoc-te.html">Tin quốc tế</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c42/bai-viet-chuyen-mon.html">Bài viết
                                            chuyên môn</a></li>
                                </ul>
                            </li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c2/giam-dinh-phap-y.html"
                                    class=" subfolderstyle">Giám định Pháp y</a>
                                <ul class="fly" style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c43/giam-dinh-phap-y-tam-than.html">Giám
                                            định Pháp y Tâm thần</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c44/ky-thuat-giam-dinh.html">Kỹ thuật giám
                                            định</a></li>
                                </ul>
                            </li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c45/hoat-dong-khoa-hoc.html"
                                    class=" subfolderstyle">Hoạt động Khoa học</a>
                                <ul class="fly" style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c46/tin-tuc-nghien-cuu-khoa-hoc.html">Tin
                                            tức nghiên cứu khoa học</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c47/cac-de-tai-nghien-cuu-khoa-hoc.html">Các
                                            đề tài nghiên cứu khoa học</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c72/cac-chuyen-de-khoa-hoc.html">Các
                                            chuyên đề khoa học</a></li>
                                </ul>
                            </li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c48/thong-tin-y-hoc.html"
                                    class=" subfolderstyle">Thông tin y học</a>
                                <ul class="fly" style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c49/suc-khoe-tam-than.html">Sức khỏe tâm
                                            thần</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c50/giao-duc-suc-khoe.html">Giáo dục sức
                                            khỏe</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c68/thong-tin-thuoc-va-dieu-tri.html">Thông
                                            tin thuốc và điều trị</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c69/tin-khac.html">Tin khác</a></li>
                                </ul>
                            </li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c52/kham-chua-benh.html"
                                    class=" subfolderstyle">Khám chữa bệnh</a>
                                <ul class="fly" style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c70/cac-dich-vu-ky-thuat.html">Các dịch vụ
                                            kỹ thuật</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c71/tin-kham-chua-benh.html">Tin khám chữa
                                            bệnh</a></li>
                                </ul>
                            </li>
                            <li class="normal_item"> <a
                                    href="https://pyttmientrung.moh.gov.vn/c53/dao-tao--hop-tac-quoc-te.html">Đào tạo - Hợp
                                    tác quốc tế</a></li>
                            <li class="normal_item"> <a
                                    href="https://pyttmientrung.moh.gov.vn/c54/van-ban-chuyen-nganh.html">Văn bản chuyên
                                    ngành</a></li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c55/chi-dao-tuyen.html">Chỉ
                                    đạo tuyến</a></li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c59/phap-luat.html">Pháp
                                    luật</a></li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c60/hoat-dong-doan-the.html"
                                    class=" subfolderstyle">Hoạt động đoàn thể</a>
                                <ul class="fly" style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c62/chi-bo.html">Chi bộ</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c63/cong-doan.html">Công đoàn</a></li>
                                    <li><a href="https://pyttmientrung.moh.gov.vn/c64/doan-thanh-nien.html">Đoàn thanh
                                            niên</a></li>
                                </ul>
                            </li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c8/thu-vien-anh.html">Thư
                                    viện ảnh</a></li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c9/video.html">Video</a></li>
                            <li class="normal_item"> <a href="https://pyttmientrung.moh.gov.vn/c61/goc-thu-gian.html">Góc
                                    thư giản</a></li>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">
                    var menuids = ["sidebarmenu1"]

                    function initsidebarmenu() {
                        for (var i = 0; i < menuids.length; i++) {
                            var ultags = document.getElementById(menuids[i]).getElementsByTagName("ul")
                            for (var t = 0; t < ultags.length; t++) {
                                ultags[t].parentNode.getElementsByTagName("a")[0].className += " subfolderstyle"
                                if (ultags[t].parentNode.parentNode.id == menuids[i]) ultags[t].style.left = ultags[t].parentNode
                                    .offsetWidth + "px"
                                else
                                    ultags[t].style.left = ultags[t - 1].getElementsByTagName("a")[0].offsetWidth + "px"
                                ultags[t].parentNode.onmouseover = function() {
                                    this.getElementsByTagName("ul")[0].style.display = "block"
                                }
                                ultags[t].parentNode.onmouseout = function() {
                                    this.getElementsByTagName("ul")[0].style.display = "none"
                                }
                            }
                            for (var t = ultags.length - 1; t > -1; t--) {
                                ultags[t].style.visibility = "visible"
                                ultags[t].style.display = "none"
                            }
                        }
                    }
                    if (window.addEventListener) window.addEventListener("load", initsidebarmenu, false)
                    else if (window.attachEvent) window.attachEvent("onload", initsidebarmenu)
                </script>
            </div>
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
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;"
                                alt="Bênh viện Trung Ương"></a>
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
            @yield('content')

        </div>
        <div id="wrapper_right">
            {{-- <div id="notice" class="swiper vertical-notice">
                <div class="panel">
                    <div class="panel_tcat notice">
                        <a href="{{ url('c37/thong-bao.html') }}">Thông báo</a>
                    </div>

                    <div class="swiper-wrapper" style="height: 250px;">
                        @foreach ($notices as $item)
                            <div class="swiper-slide">
                                <a href="{{ url($item->url) }}">
                                    {{ \Illuminate\Support\Str::limit($item->title, 100) }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}

            @foreach ($menus as $menu)
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

            <script>
                new Swiper('.vertical-notice .swiper', {
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
            <div id="ads_04">
                <div class="panel">
                    <div>
                        <a href="http://pyttmientrung.moh.gov.vn/c65/lich-cong-tac.html" target="_blank"
                            title="Lịch công tác"><img src="/templates/default/images/noimage.gif"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Lịch công tác"></a>
                    </div>
                    <div>
                        <a href="http://pyttmientrung.moh.gov.vn/c67/gia-dich-vu-y-te.html" target="_blank"
                            title="Giá"><img src="/upload/image/quangcao/adv_04_03.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Giá"></a>
                    </div>
                    <div>
                        <a href="http://pyttmientrung.moh.gov.vn/c52/kham-chua-benh.html" target="_blank"
                            title="Khám chữa bệnh"><img src="/upload/image/quangcao/adv_04_02.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Khám chữa bệnh"></a>
                    </div>
                    <div>
                        <a href="http://pyttmientrung.moh.gov.vn/c73/chi-hoi-tam-than-hoc.html" target="_blank"
                            title="Chi hội Tâm thần học"><img src="/upload/image/quangcao/chtth.jpg"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;"
                                alt="Chi hội Tâm thần học"></a>
                    </div>
                </div>
            </div>
            <div id="faqs">
                <div class="panel">
                    <div class="panel_tcat faq">
                        <a href="https://pyttmientrung.moh.gov.vn/c58/hoi--dap.html">Hỏi - đáp</a>
                    </div>
                    <div class="smartmarquee example" style="height: 250px">
                        <ul class="container" style="margin-top: -186.643px;">
                            <li><a href="https://pyttmientrung.moh.gov.vn/c58/hoi--dap.html?faq_id=19"> Em muốn hỏi hồ sơ
                                    giám định tâm thần gồm những giấy tờ nào???
                                    Em của em có vấn đế từ nhỏ được nhà nước...</a></li>
                            <li><a href="https://pyttmientrung.moh.gov.vn/c58/hoi--dap.html?faq_id=17"> Kính gửi: Trung tâm
                                    pháp y tâm thần khu vực miền Trung


                                    Con gái tôi 42 tuổi, bị khuyết tật từ nhỏ và:
                                    - Đã...</a></li>
                            <li><a href="https://pyttmientrung.moh.gov.vn/c58/hoi--dap.html?faq_id=16"> xin Bác sĩ cho cháu
                                    hỏi: Cháu ỏ tỉnh Quảng Ngãi; cháu có một người quen có ý định muốn chuyển quyền sử dụng
                                    đất;...</a></li>
                            <li><a href="https://pyttmientrung.moh.gov.vn/c58/hoi--dap.html?faq_id=15"> Một người có sổ
                                    điều trị ngoại trú tâm thần thực hiện hành vi vi phạm pháp luật chưa bị khởi tố hình sự.
                                    Cơ...</a></li>
                            <li><a href="https://pyttmientrung.moh.gov.vn/c58/hoi--dap.html?faq_id=14">thủ tục và thời gian
                                    giám đinh tâm thần cho bị can như thế nào? và chí phí cho việc giám định là bao nhiêu.
                                </a></li>
                            <li><a href="https://pyttmientrung.moh.gov.vn/c58/hoi--dap.html?faq_id=13"> Việc đề nghị giám
                                    định một người mất năng lực hành vi dân sự ( trong vụ việc dân sự) thì hết bao nhiêu
                                    tiền....</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div id="ads_05">
                <div class="panel">
                    <div>
                        <a href="http://pyttmientrung.moh.gov.vn/c54/van-ban-chuyen-nganh.html" target="_blank"
                            title="Văn bản chuyên ngành"><img src="/upload/image/quangcao/adv_05_01.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;"
                                alt="Văn bản chuyên ngành"></a>
                    </div>
                    <div>
                        <a href="http://pyttmientrung.moh.gov.vn/cmsadmin/" target="_blank" title="Tin nội bộ"><img
                                src="/upload/image/quangcao/adv_05_02.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Tin nội bộ"></a>
                    </div>
                    <div>
                        <a href="http://suckhoedoisong.vn/" target="_blank" title="Sức khỏe đời sống"><img
                                src="/upload/image/quangcao/adv_05_03.png"
                                style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Sức khỏe đời sống"></a>
                    </div>
                </div>
            </div>
            <div id="gallery">
                <script type="text/javascript"
                    src="https://pyttmientrung.moh.gov.vn/templates/default/common/promotion/js/jcarousellite_1.0.1.pack.js"></script>
                <script type="text/javascript"
                    src="https://pyttmientrung.moh.gov.vn/templates/default/common/promotion/js/captify.tiny.js"></script>
                <link rel="stylesheet" href="https://pyttmientrung.moh.gov.vn/templates/default/modules/home/style.css"
                    type="text/css" media="screen">
                <div class="panel_tcat gallerys">
                    <a href="#">Thư viện ảnh</a>
                </div>
                <div id="room_slide">
                    <div id="list">
                        <div class="sliderroom"
                            style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 248px;">
                            <ul
                                style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 2585px; left: -984.631px;">

                            </ul>
                        </div>
                        <div class="prevroom"><img
                                src="http://eldorahotel.com/templates/default/modules/room/images/media-left.png"
                                alt="prev"></div>
                        <div class="nextroom"><img
                                src="http://eldorahotel.com/templates/default/modules/room/images/media-right.png"
                                alt="next"></div>
                        <div class="clearfloat"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $(".sliderroom").jCarouselLite({
                            btnNext: ".nextroom",
                            btnPrev: ".prevroom",
                            visible: 1,
                            auto: 5000,
                            speed: 3000
                        });
                    });
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
                <div class="panel_tcat videos">
                    <a href="#">Video</a>
                </div>
                <center>
                    <div id="container1" style="text-align: center;">Đang tải ...</div>
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
                    </script>
                </center>
            </div>
            <div id="staitics">
                <div class="panel_tcat statitis">
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
        <div class="clear"></div>
    </div>
@endsection
