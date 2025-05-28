@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ __('faq.detail') }}
@endsection

@section('contentheader_title')
    {{ __('faq.detail') }}
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i> {{ __('message.dashboard') }}</a></li>
        <li><a href="{{ url('/admin/faqs') }}">{{ __('faq.list') }}</a></li>
        <li class="active">{{ __('message.detail') }}</li>
    </ol>
@endsection

@section('main-content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ __('message.detail') }}</h3>
            <div class="box-tools">
                <a href="{{ url('/admin/faqs') }}" class="btn btn-warning btn-sm">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="hidden-xs">{{ trans('message.lists') }}</span>
                </a>
                @can('FaqController@update')
                    <a href="{{ url('/admin/faqs/' . $faq->id . '/edit') }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <span class="hidden-xs">{{ __('message.edit') }}</span>
                    </a>
                @endcan
                @can('FaqController@destroy')
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => ['admin/faqs', $faq->id],
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
                        <th>{{ __('faq.email') }}</th>
                        <td>{{ $faq->email }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('faq.nameq') }}</th>
                        <td>{{ $faq->nameq }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('faq.email') }}</th>
                        <td>{{ $faq->email }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('faq.question') }}</th>
                        <td>{!! nl2br(e($faq->question)) !!}</td>
                    </tr>
                    <tr>
                        <th>{{ __('faq.answer') }}</th>
                        <td>
                            @if (!empty(trim($faq->answer)))
                                <div class="">{!! $faq->answer !!}</div>
                            @else
                                <span class="text-danger">Chưa có câu trả lời</span>
                            @endif
                        </td>
                    </tr>


                    <tr>
                        <th>{{ __('faq.approved') }}</th>
                        <td>{!! $faq->approved == config('settings.active')
                            ? '<span class="text-success">Đã duyệt</span>'
                            : '<span class="text-danger">Chưa duyệt</span>' !!}</td>
                    </tr>
                    <tr>
                        <th>{{ __('faq.postdate') }}</th>
                        <td>{{ \Carbon\Carbon::parse($faq->postdate)->format(config('settings.format.date')) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
