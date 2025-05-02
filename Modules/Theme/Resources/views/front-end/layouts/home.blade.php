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
            <script src="/jscripts/easySlider1.7.js" type="text/javascript"></script>
            <link href="/templates/default/images/easyslider.css" type="text/css" rel="stylesheet">
            <div class="box-container1">

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
            </div>
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
            <div class="panel">
                <div>
                    <a href="" target="_blank" title="30/4"><img src="/upload/image/30.4.2025.jpg"
                            style="width: 650px;height: auto;" alt="30/4"></a>
                </div>
            </div>
            <div class="box-container1">

                <div class="box-cat">
                    <div class="box-header">
                        <h2><a class="title" href="https://pyttmientrung.moh.gov.vn/c2/giam-dinh-phap-y.html">Giám định
                                Pháp y</a></h2>
                    </div>
                    <div class="list-item-first"><a
                            href="https://pyttmientrung.moh.gov.vn/c2/t2-307/cong-tac-dieu-tri-doi-tuong-trong-giam-dinh-phap-y-tam-than-noi-tru.html"><img
                                align="left" class="image-left" src="/upload/image/trung-tam.jpg" width="180"
                                border="0"></a> <a class="first-item-link"
                            href="https://pyttmientrung.moh.gov.vn/c2/t2-307/cong-tac-dieu-tri-doi-tuong-trong-giam-dinh-phap-y-tam-than-noi-tru.html">CÔNG
                            TÁC ĐIỀU TRỊ ĐỐI TƯỢNG TRONG GIÁM ĐỊNH PHÁP Y TÂM THẦN NỘI TRÚ</a>
                        <p></p><br>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c2/t2-242/danh-gia-thuc-hien-thong-tu-18-2015-tt-byt-va-mot-so-kien-nghi-sua-doi-quy-trinh-giam-dinh-phap-y-tam-than.html">
                            ĐÁNH GIÁ THỰC HIỆN THÔNG TƯ 18/2015/TT-BYT VÀ MỘT SỐ KIẾN NGHỊ SỬA ĐỔI QUY TRÌNH GIÁM ĐỊNH PHÁP
                            Y...</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c2/t2-238/giam-dinh-phap-y-tam-than-doi-tuong-pham-toi-lien-quan-den-su-dung-ma-tuy-moi.html">GIÁM
                            ĐỊNH PHÁP Y TÂM THẦN ĐỐI TƯỢNG PHẠM TỘI LIÊN QUAN ĐẾN SỬ DỤNG MA TÚY MỚI </a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c2/t2-117/bao-cao-hoat-dong-nam-2015-va-trien-khai-ke-hoach-nam-2016-cua-trung-tam-phap-y-tam-than-khu-vuc-mien-trung.html">
                            BÁO CÁO HOẠT ĐỘNG NĂM 2015 VÀ TRIỂN KHAI KẾ HOẠCH NĂM 2016 CỦA TRUNG TÂM PHÁP Y TÂM THẦN KHU VỰC
                            MIỀN...</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c2/t2-58/doan-kiem-tra-cua-trung-uong-ve-giam-dinh-tu-phap-lam-viec-tai-trung-tam-giam-dinh-phap-y-tam-than-thua-thien-hue.html">
                            Đoàn Kiểm tra của Trung ương về giám định tư pháp làm việc tại Trung tâm Giám định pháp y tâm
                            thần...</a>

                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="clear:both;"></div>
                <div class="panel">
                    <div>
                        <a href="" target="_blank" title="Y tế"><img src="/upload/image/quangcao/adv_03_01.png"
                                style="border: solid 1px #CCCCCC;width: 650px;height: auto;" alt="Y tế"></a>
                    </div>
                </div>
                <div class="box-cat">
                    <div class="box-header">
                        <h2><a class="title" href="https://pyttmientrung.moh.gov.vn/c45/hoat-dong-khoa-hoc.html">Hoạt
                                động Khoa học</a></h2>
                    </div>
                    <div class="list-item-first"><a
                            href="https://pyttmientrung.moh.gov.vn/c45/t45-454/nghien-cuu-dac-diem-lam-sang-roi-loan-tam-than-va-mot-so-yeu-to-lien-quan-thuc-day-hanh-vi-pham-toi-cac-doi-tuong-roi-loan-khi-sac-trong-giam-dinh-phap-y-tam-than.html"><img
                                align="left" class="image-left" src="/upload/image/quangcao/roi-loan-khi-sac.jpg"
                                width="180" border="0"></a> <a class="first-item-link"
                            href="https://pyttmientrung.moh.gov.vn/c45/t45-454/nghien-cuu-dac-diem-lam-sang-roi-loan-tam-than-va-mot-so-yeu-to-lien-quan-thuc-day-hanh-vi-pham-toi-cac-doi-tuong-roi-loan-khi-sac-trong-giam-dinh-phap-y-tam-than.html">
                            NGHIÊN CỨU ĐẶC ĐIỂM LÂM SÀNG RỐI LOẠN TÂM THẦN VÀ MỘT SỐ YẾU TỐ LIÊN QUAN THÚC ĐẨY HÀNH VI
                            PHẠM...</a>
                        <p> Rối loạn khí sắc, còn được gọi là rối loạn cảm xúc, là bất kỳ nhóm bệnh nào thuộc nhóm bệnh rối
                            loạn tâm thần và hành vi [33] trong đó đặc điểm cơ bản chính là rối loạn khí sắc của...</p><br>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c45/t45-399/nghien-cuu-dac-diem-lam-sang-roi-loan-tam-than-va-mot-so-yeu-to-lien-quan-thuc-day-hanh-vi-pham-toi-cac-doi-tuong-roi-loan-phan-liet-cam-xuc-trong-giam-dinh-phap-y-tam-than.html">
                            NGHIÊN CỨU ĐẶC ĐIỂM LÂM SÀNG RỐI LOẠN TÂM THẦN VÀ MỘT SỐ YẾU TỐ LIÊN QUAN THÚC ĐẨY HÀNH VI
                            PHẠM...</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c45/t45-367/nghien-cuu-dac-diem-lam-sang--yeu-to-thuc-day-hanh-vi-pham-toi-cac-doi-tuong-roi-loan-tam-than-va-hanh-vi-do-su-dung-ruou-trong-gdpytt.html">
                            NGHIÊN CỨU ĐẶC ĐIỂM LÂM SÀNG &amp; YẾU TỐ THÚC ĐẨY HÀNH VI PHẠM TỘI CÁC ĐỐI TƯỢNG RỐI LOẠN
                            TÂM...</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c45/t45-315/nghien-cuu-dac-diem-lam-sang-va-yeu-to-thuc-day-hanh-vi-pham-toi-o-cac-doi-tuong-cham-phat-trien-tam-than-trong-giam-dinh-phap-y-tam-than.html">
                            NGHIÊN CỨU ĐẶC ĐIỂM LÂM SÀNG VÀ YẾU TỐ THÚC ĐẨY HÀNH VI PHẠM TỘI Ở CÁC ĐỐI TƯỢNG CHẬM
                            PHÁT...</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c45/t45-294/nghien-cuu-dac-diem-lam-sang-mot-so-yeu-to-thuc-day-hanh-vi-pham-toi-o-benh-nhan-tam-than-phan-liet-trong-giam-dinh-phap-y-tam-than.html">
                            NGHIÊN CỨU ĐẶC ĐIỂM LÂM SÀNG, MỘT SỐ YẾU TỐ THÚC ĐẨY HÀNH VI PHẠM TỘI Ở BỆNH NHÂN TÂM
                            THẦN...</a>

                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="clear:both;"></div>

                <div class="box-cat">
                    <div class="box-header">
                        <h2><a class="title" href="https://pyttmientrung.moh.gov.vn/c48/thong-tin-y-hoc.html">Thông tin y
                                học</a></h2>
                    </div>
                    <div class="list-item-first"><a
                            href="https://pyttmientrung.moh.gov.vn/c48/t48-424/huong-ung-ngay-suc-khoe-tam-than-the-gioi-10-10-2023.html"><img
                                align="left" class="image-left" src="/upload/image/quangcao/untitled.png"
                                width="180" border="0"></a> <a class="first-item-link"
                            href="https://pyttmientrung.moh.gov.vn/c48/t48-424/huong-ung-ngay-suc-khoe-tam-than-the-gioi-10-10-2023.html">Hưởng
                            ứng ngày Sức khỏe Tâm thần Thế giới 10/10/2023</a>
                        <p> Hàng năm Tổ chức Y tế Thế giới (WHO) lấy ngày 10 tháng 10 để tổ chức các hoạt động truyền thông
                            về Sức khoẻ Tâm thần với mục tiêu là tăng cường nhận thức của các quốc gia về tầm quan...</p>
                        <br>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c48/t48-404/ngay-suc-khoe-the-gioi-7-4--suc-khoe-cho-moi-nguoi-.html">NGÀY
                            SỨC KHỎE THẾ GIỚI (7/4) "SỨC KHỎE CHO MỌI NGƯỜI"</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c48/t48-377/huong-ung-ngay-suc-khoe-tam-than-the-gioi-10-10-2022--lam-cho-suc-khoe-tam-than-va-suc-khoe-cua-moi-nguoi-tro-thanh-uu-tien-toan-cau.html">
                            HƯỞNG ỨNG NGÀY SỨC KHỎE TÂM THẦN THẾ GIỚI 10/10/2022 - LÀM CHO SỨC KHỎE TÂM THẦN VÀ SỨC KHỎE
                            CỦA...</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c48/t48-366/ky-niem-110-nam-ngay-sinh-dong-chi-to-hieu-1912--2022-.html">Kỷ
                            niệm 110 năm Ngày sinh đồng chí Tô Hiệu (1912 - 2022)</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c48/t48-354/fda-canh-bao-ve-bien-co-ho-hap-nghiem-trong-khi-su-dung--cac-thuoc-chong-dong-kinh-gabapentin-va-pregabalin.html">
                            FDA: CẢNH BÁO VỀ BIẾN CỐ HÔ HẤP NGHIÊM TRỌNG KHI SỬ DỤNG - CÁC THUỐC CHỐNG ĐỘNG KINH GABAPENTIN
                            VÀ...</a>

                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="clear:both;"></div>

                <div class="box-cat">
                    <div class="box-header">
                        <h2><a class="title" href="https://pyttmientrung.moh.gov.vn/c52/kham-chua-benh.html">Khám chữa
                                bệnh</a></h2>
                    </div>
                    <div class="list-item-first"><a
                            href="https://pyttmientrung.moh.gov.vn/c52/t52-118/het-long-vi-benh-nhan.html"><img
                                align="left" class="image-left"
                                src="/upload/image/baiviet/khamchuabenh/het-long-vi-benh-nhan.jpg" width="180"
                                border="0"></a> <a class="first-item-link"
                            href="https://pyttmientrung.moh.gov.vn/c52/t52-118/het-long-vi-benh-nhan.html">HẾT LÒNG VÌ BỆNH
                            NHÂN</a>
                        <p> (TTH) - Tốt nghiệp Trường đại học Y khoa Huế hệ bác sĩ dài hạn 6 năm vào năm 1981, 34 năm gắn bó
                            với công tác chăm sóc sức khỏe tâm thần (SKTT) cho người bệnh, thạc sĩ, bác sĩ Tôn Thất...</p>
                        <br>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c52/t52-97/sinh-hoa-benh-tam-than-phan-liet-va-co-che-hoat-dong-cua-cac-thuoc-an-than-kinh.html">Sinh
                            hóa bệnh Tâm thần phân liệt và cơ chế hoạt động của các thuốc an thần kinh</a>

                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="clear:both;"></div>

                <div class="box-cat">
                    <div class="box-header">
                        <h2><a class="title"
                                href="https://pyttmientrung.moh.gov.vn/c53/dao-tao--hop-tac-quoc-te.html">Đào tạo - Hợp tác
                                quốc tế</a></h2>
                    </div>
                    <div class="list-item-first"><a
                            href="https://pyttmientrung.moh.gov.vn/c53/t53-110/hoi-nghi-tap-huan-thong-tu-so-20-2014-tt-byt-quy-dinh-ton-thuong-co-the-su-dung-trong-giam-dinh-phap-y-giam-dinh-phap-y-tam-than.html"><img
                                align="left" class="image-left" src="/upload/image/baiviet/daotaohoptac/1.jpg"
                                width="180" border="0"></a> <a class="first-item-link"
                            href="https://pyttmientrung.moh.gov.vn/c53/t53-110/hoi-nghi-tap-huan-thong-tu-so-20-2014-tt-byt-quy-dinh-ton-thuong-co-the-su-dung-trong-giam-dinh-phap-y-giam-dinh-phap-y-tam-than.html">
                            Hội nghị Tập huấn Thông tư số 20/2014/TT-BYT Quy định tổn thương cơ thể sử dụng trong giám
                            định...</a>
                        <p> Bộ Y tế vừa tổ chức Hội nghị Tập huấn Thông tư số 20/2014/TT-BYT ngày 12/6/2014 của Bộ Y tế Quy
                            định tổn thương cơ thể sử dụng trong giám định pháp y, giám định pháp y tâm thần vào ngày 8...
                        </p><br>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c53/t53-109/tap-huan-thong-tu-18-va-thong-tu-31-2015-tt--byt-ve-giam-dinh-phap-y-tam-than.html">TẬP
                            HUẤN THÔNG TƯ 18 VÀ THÔNG TƯ 31 /2015/TT - BYT VỀ GIÁM ĐỊNH PHÁP Y TÂM THẦN</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c53/t53-49/hoi-nghi-tap-huan--cap-nhat-chan-doan-va-dieu-tri-cac-roi-loan-tam-than-do-su-dung-cac-chat-dang-amphetamine--.html">
                            Hội nghị Tập huấn “Cập nhật chẩn đoán và điều trị các rối loạn tâm thần do sử dụng các
                            chất...</a>

                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="clear:both;"></div>

                <div class="box-cat">
                    <div class="box-header">
                        <h2><a class="title" href="https://pyttmientrung.moh.gov.vn/c59/phap-luat.html">Pháp luật</a>
                        </h2>
                    </div>
                    <div class="list-item-first"><a
                            href="https://pyttmientrung.moh.gov.vn/c59/t59-462/thong-tu-so-11-2024-tt-byt-ngay-12-thang-7-nam-2024-cua-bo-truong-bo-y-te.html"><img
                                align="left" class="image-left" src="/upload/image/14418529731410493625vbmoi.bmp"
                                width="180" border="0"></a> <a class="first-item-link"
                            href="https://pyttmientrung.moh.gov.vn/c59/t59-462/thong-tu-so-11-2024-tt-byt-ngay-12-thang-7-nam-2024-cua-bo-truong-bo-y-te.html">Thông
                            tư số 11/2024/TT-BYT ngày 12 tháng 7 năm 2024 của Bộ trưởng Bộ Y tế</a>
                        <p>Thông tư số 11/2024/TT-BYT ngày 12 tháng 7 năm 2024 của Bộ trưởng Bộ Y tế - Quy định cụ thể tiêu
                            chuẩn, điều kiện xét thăng hặng chức danh nghề nghiệp viên chức chuyên ngành y, dược, dân số.
                        </p><br>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c59/t59-352/luat-bao-ve-bi-mat-nha-nuoc-.html">LUẬT BẢO
                            VỆ BÍ MẬT NHÀ NƯỚC.</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c59/t59-351/nghi-dinh-60-2021-nd-cp-cua-chinh-phu-ve-viec-quy-dinh-co-che-tu-chu-tai-chinh-cua-don-vi-su-nghiep-cong-lap.html">
                            Nghị định 60/2021/NĐ-CP của Chính phủ về việc quy định cơ chế tự chủ tài chính của đơn vị
                            sự...</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c59/t59-335/tim-hieu-noi-dung-dieu-125-blhs-nam-2015-ve---toi-giet-nguoi-trong-trang-thai-tinh-than-bi-kich-dong-manh--.html">
                            Tìm hiểu nội dung Điều 125 BLHS năm 2015 về “ Tội giết người trong trạng thái tinh thần bị
                            kích...</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c59/t59-334/phan-biet-cac-toi-hiep-dam-cuong-dam-dam-o-giao-cau-theo-quy-dinh-tai-bo-luat-hinh-su-nam-2015.html">Phân
                            biệt các tội hiếp dâm, cưỡng dâm, dâm ô, giao cấu theo quy định tại Bộ luật hình sự năm 2015</a>

                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="clear:both;"></div>

                <div class="box-cat">
                    <div class="box-header">
                        <h2><a class="title" href="https://pyttmientrung.moh.gov.vn/c64/doan-thanh-nien.html">Đoàn thanh
                                niên</a></h2>
                    </div>
                    <div class="list-item-first"><a
                            href="https://pyttmientrung.moh.gov.vn/c64/t64-457/huong-ung-ngay-moi-truong-the-gioi-2024.html"><img
                                align="left" class="image-left" src="/upload/image/nam2024/mttg/ava.jpg"
                                width="180" border="0"></a> <a class="first-item-link"
                            href="https://pyttmientrung.moh.gov.vn/c64/t64-457/huong-ung-ngay-moi-truong-the-gioi-2024.html">HƯỞNG
                            ỨNG NGÀY MÔI TRƯỜNG THẾ GIỚI 2024</a>
                        <p> Ngày 05 tháng 6 hàng năm được Liên hợp quốc chọn là ngày Môi trường thế giới kể từ Hội nghị
                            thượng đỉnh về con người và môi trường năm 1972 tại thủ đô Stockholm - Thủy Điển. Đây là một...
                        </p><br>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c64/t64-455/chu-nhat-xanh-nam-2024.html">CHỦ NHẬT XANH
                            NĂM 2024</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c64/t64-440/chuong-trinh--xuan-tinh-nguyen-2024--cua-chi-doan-trung-tam-phap-y-tam-than-khu-vuc-mien-trung-.html">CHƯƠNG
                            TRÌNH “XUÂN TÌNH NGUYỆN 2024” CỦA CHI ĐOÀN TRUNG TÂM PHÁP Y TÂM THẦN KHU VỰC MIỀN TRUNG.</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c64/t64-396/nhieu-hoat-dong--thang-ba-bien-gioi--.html">Nhiều
                            hoạt động “Tháng ba biên giới”</a>

                    </div>
                    <div style="clear:both;"></div>
                    <div class="list-next"> <a
                            href="https://pyttmientrung.moh.gov.vn/c64/t64-385/hoat-dong--xuan-dong-day--tet-se-chia--nam-2023-cua-chi-doan-trung-tam-phap-y-tam-than-khu-vuc-mien-trung.html">
                            Hoạt động “Xuân đong đầy - Tết sẻ chia” năm 2023 của Chi đoàn Trung tâm Pháp y tâm thần khu
                            vực...</a>

                    </div>
                    <div style="clear:both;"></div>
                </div>

                <div style="clear:both;"></div>
            </div><br>

        </div>
        <div id="wrapper_right">
            <div id="notice">
                <div class="panel">
                    <div class="panel_tcat notice">
                        <a href="https://pyttmientrung.moh.gov.vn/c37/thong-bao.html">Thông báo</a>
                    </div>
                    <div class="smartmarquee example" style="height: 250px">
                        <ul class="container" style="margin-top: -266.038px;">
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-478/quyet-dinh-so-4083-qd-byt-ngay-31-12-2024-ve-viec-giao-du-toan-thu-chi-ngan-sach-nha-nuoc-nam-2025-cua-bo-truong-bo-y-te.html">
                                    Quyết định số 4083/QĐ-BYT ngày 31/12/2024 về việc giao dự toán thu, chi ngân sách nhà
                                    nước năm 2025 của Bộ Trưởng Bộ Y...</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-473/lich-tiep-cong-dan-cua-lanh-dao-trung-tam-nam-2025.html">Lịch
                                    tiếp công dân của Lãnh đạo Trung tâm năm 2025</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-447/qd-4789-qd-byt-ve-viec-giao-du-toan-thu-chi-ngan-sach-nha-nuoc-nam-2024.html">QĐ
                                    4789/QĐ-BYT về việc giao dự toán thu, chi ngân sách nhà nước năm 2024</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-432/quyet-dinh-so-4215-qd-byt-ngay-14-11-2023-cua-bo-truong-bo-y-te-ve-viec-dieu-chinh-du-toan-ngan-sach-nha-nuoc-nam-2023.html">
                                    Quyết định số 4215/QĐ-BYT ngày 14/11/2023 của Bộ trưởng Bộ Y tế về việc điều chỉnh dự
                                    toán ngân sách nhà nước...</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-430/quyet-dinh-giao-quyen-tu-chu-tai-chinh-2023.html">Quyết
                                    định giao quyền tự chủ tài chính 2023</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-429/quyet-dinh-giao-du-toan-nam-2023.html">Quyết
                                    định giao Dự toán năm 2023</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-425/thong-bao-ket-qua-trung-tuyen-vien-chuc-dot-2-nam-2023.html">Thông
                                    báo kết quả trúng tuyển viên chức đợt 2 năm 2023</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-422/thong-bao-ve-viec-trieu-tap-thi-sinh-tham-du-ky-phong-van-xet-tuyen-vien-chuc-dot-2-nam-2023.html">Thông
                                    báo về việc triệu tập thí sinh tham dự kỳ phỏng vấn xét tuyển viên chức đợt 2 năm
                                    2023</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-421/noi-dung-on-tap-phong-van-tuyen-dung-vien-chuc-dot-2-nam-2023.html">Nội
                                    dung ôn tập phỏng vấn tuyển dụng viên chức đợt 2 năm 2023</a> </li>
                            <li><a
                                    href="https://pyttmientrung.moh.gov.vn/c37/t37-420/danh-sach-thi-sinh-du-dieu-kien-tieu-chuan-de-tham-du-tuyen-dung-vong-2.html">Danh
                                    sách thí sinh đủ điều kiện, tiêu chuẩn để tham dự tuyển dụng vòng 2</a> </li>
                        </ul>
                    </div>

                </div>
            </div>
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
