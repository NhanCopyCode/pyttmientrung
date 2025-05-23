@extends('adminlte::layouts.app')
@section('htmlheader_title')
    {{ __('categories.category') }}
@endsection
@section('contentheader_title')
    {{ __('categories.category') }}
@endsection
@section('contentheader_description')
@endsection
@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i> {{ __('message.dashboard') }}</a></li>
        <li><a href="{{ url('/admin/menus') }}">{{ __('categories.category') }}</a></li>
        <li class="active">{{ __('message.detail') }}</li>
    </ol>
@endsection
@section('main-content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __('message.detail') }}</h3>
            <div class="box-tools">
                <a href="{{ url('/admin/menus') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> <span class="hidden-xs">{{ trans('message.lists') }}</span></a>
                @can('MenuController@update')
                    <a href="{{ url('/admin/menus/' . $menu->id . '/edit') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-pencil-square-o" aria-hidden="true"></i> <span
                            class="hidden-xs">{{ __('message.edit') }}</span></a>
                @endcan
                @can('MenuController@destroy')
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => ['admin/menus', $menu->id],
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
                        <th> {{ trans('theme::categories.title') }} </th>
                        <td> {{ $menu->title }} </td>
                    </tr>
                    <tr>
                        <th> {{ 'Thể loại cha' }} </th>
                        @if (isset($menu->parent->title))
                            <td> {{ $menu->parent->title }} </td>
                        @else
                            <td style="color: red;"> {{ 'Không có' }} </td>
                        @endif
                    </tr>
                    <tr>
                        <th> {{ 'Vị trí hiển thị' }} </th>
                        <td>
                            <div class="row">
                                @foreach ($menu->positions as $item)
                                    <div class="col-6 py-2">{{ $item->title}}</div>
                                @endforeach


                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th> {{ trans('theme::categories.url') }} </th>
                        <td> <a href="">{{ $menu->url }}</a> </td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>
@endsection
