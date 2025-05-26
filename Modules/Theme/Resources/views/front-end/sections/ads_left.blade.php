<div id="ads_01">
    <div class="panel">
        @foreach ($ads_left as $ad)
            <div>
                <a href="{{ $ad->link }}" target="_blank" title="{{ $ad->title }}">
                    <img src="{{ asset($ad->pathimage) }}"
                         style="border: solid 1px #CCCCCC;width: 246px;height: auto;"
                         alt="{{ $ad->title }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
