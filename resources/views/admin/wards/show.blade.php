@extends('adminlte::layouts.app')
@section('htmlheader_title')
    {{ __('Xã') }}
@endsection
@section('contentheader_title')
    {{ __('Xã') }}
@endsection
@section('contentheader_description')

@endsection
@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ url("home") }}"><i class="fa fa-home"></i> {{ __("message.dashboard") }}</a></li>
        <li><a href="{{ url('/admin/wards') }}">    {{ __('ward.ward-list') }}
            </a></li>
        <li class="active">{{ __("message.detail") }}</li>
    </ol>
@endsection
@section('main-content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-name">{{ __("message.detail") }}</h3>
            <div class="box-tools">
                <a href="{{ url('admin/wards') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                                                                                     aria-hidden="true"></i> <span
                            class="hidden-xs">{{ trans('message.lists') }}</span></a>
                &nbsp
                @can('WardController@update')
                    <a href="{{ url('admin/wards/' . $data->id . '/edit') }}" class="btn btn-primary btn-sm"><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i> <span
                                class="hidden-xs">{{ __('message.edit') }}</span></a>
                @endcan
                &nbsp
                @can('WardController@destroy')
                    {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['admin/wards', $data->id],
                    'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> <span
                        class="hidden-xs">'.__('message.delete').'</span>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-sm',
                    'name' => __('message.delete'),
                    'onclick'=>'return confirm("'.__('message.confirm_delete').'")'
                    ))!!}
                    {!! Form::close() !!}
                @endcan
            </div>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th>{{ trans('Tên xã') }}</th>
                    <td>{{ $data->name }} </td>
                </tr>
                <tr>
                    <th>{{ trans('Tên huyện') }}</th>
                    <td class="col-md-9"> {{ optional($data->district)->name }} </td>
                </tr>
                <tr>
                    <th>{{ trans('message.updated_at') }}</th>
                    <td>{{ Carbon\Carbon::parse($data->updated_at)->format(config('settings.format.datetime')) }}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection