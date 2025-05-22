    <div id="header">
        <div id="header01" style="background: url('{{ asset('img/banner.png') }}')"></div>

        <div id="header02">
            <div id="featured_1" style="height:186px;">
                <div id="featured-wrapper_1" style="height: 100%;">
                    <div class="swiper swiperSlider h-100" style="height: 100%;">
                        <div class="swiper-wrapper">
                            @foreach ($slides as $slide)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $slide->pathimage) }}"
                                        alt="Slide {{ $loop->iteration }}"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            @endforeach
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <div id="menu">
        <script type="text/javascript" src="js/stuHover.js"></script>
        <div id="main_menu" style="float: left">
            <ul id="nav">
                <!--<li style="width: 20px;height: 20px;float: left;"></li>-->
                <li class="top active"><a href="https://pyttmientrung.moh.gov.vn/c1/trang-chu.html"
                        class="top_link"><span>Trang chủ</span></a>
                </li>
                <li class="top normal"><a href="https://pyttmientrung.moh.gov.vn/c11/gioi-thieu.html"
                        class="top_link"><span>Giới thiệu</span></a>
                    <ul class="sub">
                        <li><a href="https://pyttmientrung.moh.gov.vn/c12/lich-su-hinh-thanh.html">Lịch sử hình
                                thành</a></li>
                        <li><a href="https://pyttmientrung.moh.gov.vn/c13/so-do-to-chuc.html">Sơ đồ tổ chức</a></li>
                        <li><a href="https://pyttmientrung.moh.gov.vn/c14/chuc-nang-nhiem-vu-quyen-han.html">Chức năng,
                                nhiệm vụ, quyền hạn</a></li>
                        <li><a href="https://pyttmientrung.moh.gov.vn/c26/cac-khoa-phong.html">Các khoa, phòng</a></li>
                        <li><a href="https://pyttmientrung.moh.gov.vn/c38/thanh-tich-dat-duoc.html">Thành tích đạt
                                được</a></li>
                    </ul>
                </li>
                <li class="top normal"><a href="https://pyttmientrung.moh.gov.vn/c56/danh-ba.html"
                        class="top_link"><span>Danh bạ</span></a>
                </li>
                <li class="top normal"><a href="https://pyttmientrung.moh.gov.vn/c57/tiep-nhan-y-kien.html"
                        class="top_link"><span>Tiếp nhận ý kiến</span></a>
                </li>
                <li class="top normal"><a href="https://pyttmientrung.moh.gov.vn/c58/hoi--dap.html"
                        class="top_link"><span>Hỏi - đáp</span></a>
                </li>
                <li class="top normal"><a href="https://pyttmientrung.moh.gov.vn/c10/lien-he.html"
                        class="top_link"><span>Liên hệ</span></a>
                </li>
            </ul>
        </div>
        <div style="float: right; z-index: 100;">
            <div class="panel">
                <div class="search_panel" style="background: url('{{ asset('img/search_bg.jpg') }}')">
                    <div style="padding: 10px 0 0 10px;">
                        <input type="hidden" value="{{ route('search')}}" id="hid_catid"
                            name="hid_catid">
                        <input type="text" class="inputtextsearch" onblur="searchOnBlur(this)"
                            onkeydown="enterClick(event)" onfocus="searchOnFocus(this)" value="Tìm kiếm" id="txtKey"
                            name="txtKey">
                        <input class="searchbutton" onclick="return checkValue1();" type="button" id="btnSearch"
                            name="btnSearch">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfloat"></div>
    </div>
    <div id="daytime">
        <div id="datetime" style="float: left">
            <p id="clock" style="margin:0px; padding-left:10px; line-height:43px"> </p>
        </div>
        <div style="float: right; line-height: 43px; padding-right: 15px; ">
            <img src="{{ asset('img/i_hotline.gif') }}" alt="hotline" style="vertical-align: middle;">
            <span style="text-transform: uppercase; color: #fe3621; font-weight: bold;">Đường Dây Nóng:</span>�
            <span><a style="color: #036cad; font-weight: bold;" href="tel:0234588827">0234 588 827</a></span>
        </div>
        <div class="clear"></div>
    </div>
