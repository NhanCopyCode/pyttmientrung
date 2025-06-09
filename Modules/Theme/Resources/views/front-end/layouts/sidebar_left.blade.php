<div id="wrapper_left">
    <div id="menu_left">
        <div class="clear"></div>
        <div class="leftmenu">
            <div class="sidebarmenu">
                <ul id="sidebarmenu1">
                    @foreach ($menu_trai as $menu)
                        <li class="normal_item" style="background: url('{{ asset('img/nav.png') }}') !important;">
                            <a href="{{ '/' . $menu->url }}"
                                class="{{ $menu->children->isNotEmpty() ? 'subfolderstyle' : '' }}">
                                {{ $menu->title }}
                            </a>

                            @if ($menu->children->isNotEmpty())
                                <ul class="fly"
                                    style="z-index: 99; left: 248px; visibility: visible; display: none;">
                                    @foreach ($menu->children as $child)
                                        <li>
                                            <a href="{{ '/' . $child->url }}">
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
            const menuids = ["sidebarmenu1"];

            function initsidebarmenu() {
                for (var i = 0; i < menuids.length; i++) {
                    var ultags = document.getElementById(menuids[i]).getElementsByTagName("ul");
                    for (var t = 0; t < ultags.length; t++) {
                        ultags[t].parentNode.getElementsByTagName("a")[0].className += " subfolderstyle";
                        if (ultags[t].parentNode.parentNode.id == menuids[i]) ultags[t].style.left = ultags[t].parentNode
                            .offsetWidth + "px";
                        else
                            ultags[t].style.left = ultags[t - 1].getElementsByTagName("a")[0].offsetWidth + "px";
                        ultags[t].parentNode.onmouseover = function() {
                            this.getElementsByTagName("ul")[0].style.display = "block";
                        };
                        ultags[t].parentNode.onmouseout = function() {
                            this.getElementsByTagName("ul")[0].style.display = "none";
                        };
                    }
                    for (var t = ultags.length - 1; t > -1; t--) {
                        ultags[t].style.visibility = "visible";
                        ultags[t].style.display = "none";
                    }
                }
            }
            if (window.addEventListener) {
                window.addEventListener("load", initsidebarmenu, false);
            } else if (window.attachEvent) {
                window.attachEvent("onload", initsidebarmenu);
            }
        </script>
    </div>
    @include('theme::front-end.sections.ads_left')
</div>
