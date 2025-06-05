@extends('theme::front-end.master')

@section('content')
    <div id="page_wrapper mt-4">
        <div id="wrapper_left">
            @include('theme::front-end.layouts.sidebar_left')

           
        </div>
        <div id="wrapper_center">

            <div class="post_content">
                <div class="d-flex align-items-center justify-content-end" style="margin-bottom: 20px;">
                    <span>{{ $post->postdate }}</span>
                </div>
                <h3>{{ $post->title }}</h3>
                <img src="{{ asset($post->pathimage) }}" alt="{{ $post->title }}" style="max-width: 100%; height: auto; margin-bottom: 20px; object-fit: cover;">
                <p>{!! html_entity_decode($post->summary) !!}</p>
                {!! html_entity_decode($post->content) !!}
            </div>
            @if ($relatedPosts->isNotEmpty())
                <ul class="list-related-post" style="margin-top: 20px; list-style: decimal;">
                    <h5>Bài viết liên quan:</h5>
                    @foreach ($relatedPosts as $related)
                        <li>
                            <a style="text-transform: uppercase" href="{{ url('bai-viet/' . $related->url) }}">{{ $related->title }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif



        </div>
        @include('theme::front-end.layouts.sidebar_right')
        <div class="clear"></div>
    </div>
@endsection
