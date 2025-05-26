<div id="ads_04">
    <div class="panel">
        @foreach ($ads_right_1 as $ad)
            <div>
                <a href="{{ $ad->link }}" target="_blank" title="{{ $ad->title }}">
                    <img src="{{ asset($ad->pathimage ?: 'templates/default/images/noimage.gif') }}"
                         style="border: solid 1px #CCCCCC;width: 246px;height: auto;"
                         alt="{{ $ad->title }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
