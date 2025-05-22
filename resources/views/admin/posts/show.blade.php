@extends('adminlte::layouts.app')
@section('htmlheader_title')
    {{ __('posts.category') }}
@endsection
@section('contentheader_title')
    {{ __('posts.category') }}
@endsection
@section('contentheader_description')
@endsection
@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i> {{ __('message.dashboard') }}</a></li>
        <li><a href="{{ url('/admin/posts') }}">{{ __('posts.category') }}</a></li>
        <li class="active">{{ __('message.detail') }}</li>
    </ol>
@endsection
@section('main-content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __('message.detail') }}</h3>
            <div class="box-tools">
                <a href="{{ url('/admin/posts') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> <span class="hidden-xs">{{ trans('message.lists') }}</span></a>
                @can('PostController@update')
                    <a href="{{ url('/admin/posts/' . $post->id . '/edit') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-pencil-square-o" aria-hidden="true"></i> <span
                            class="hidden-xs">{{ __('message.edit') }}</span></a>
                @endcan
                @can('PostController@destroy')
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => ['admin/posts', $post->id],
                        'style' => 'display:inline',
                    ]) !!}
                    {!! Form::button(
                        '<i class="fa fa-trash-o" aria-hidden="true"></i> <span class="hidden-xs">' . __('message.delete') . '</span>',
                        [
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-sm',
                            'title' => __('message.delete'),
                            'onclick' => 'return confirm("' . __('message.confirm_delete') . '")',
                        ],
                    ) !!}
                    {!! Form::close() !!}
                @endcan
            </div>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th> {{ trans('theme::posts.title') }} </th>
                        <td> {{ $post->title }} </td>
                    </tr>
                    <tr>
                        <th> {{ trans('theme::posts.url') }} </th>
                        <td> <a href="/{{ $post->url }}">{{ $post->url }}</a> </td>

                    </tr>

                    <tr>
                        <th> {{ trans('theme::posts.summary') }} </th>
                        <td> {{ $post->summary }} </td>

                    </tr>

                    <tr>
                        <th> {{ trans('theme::posts.content') }} </th>
                        <td> {{ $post->content }} </td>

                    </tr>
                    <tr>
                        <th> {{ trans('Sắp xếp') }} </th>
                        <td> {{ $post->arrange }} </td>
                    </tr>
                    <tr>
                        <th> {{ trans('theme::posts.active') }} </th>
                        <td> {{ $post->approved == 1 ? 'Duyệt' : 'Chưa duyệt' }} </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
