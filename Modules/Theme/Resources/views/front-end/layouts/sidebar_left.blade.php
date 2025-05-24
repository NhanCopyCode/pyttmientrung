<div id="wrapper_left">
    <div id="menu_left">
        <div class="clear"></div>
        <div class="leftmenu">
            <div class="sidebarmenu">
                <ul id="sidebarmenu1">
                    @foreach ($menus_left as $menu)
                        <li class="normal_item" style="background: url('{{ asset('img/nav.png') }}')">
                            <a href="{{ $menu->url }}"
                                class="{{ $menu->children->isNotEmpty() ? 'subfolderstyle' : '' }}">
                                {{ $menu->title }}
                            </a>

                            @if ($menu->children->isNotEmpty())
                                <ul class="fly"
                                    style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    @foreach ($menu->children as $child)
                                        <li>
                                            <a href="{{ $child->url }}">
                                                {{ $child->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
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
                        style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Cổng thông tin điện tử"></a>
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
                <a href="http://www.bvtwhue.com.vn/index.asp?lang=vn" target="_blank" title="Bênh viện Trung Ương"><img
                        src="/upload/image/quangcao/adv_01_06.png"
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
                        style="border: solid 1px #CCCCCC;width: 246px;height: auto;" alt="Thông tin Y học Việt Nam"></a>
            </div>
        </div>
    </div>
</div>
