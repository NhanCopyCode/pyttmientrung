@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ __('faq.title') }}
@endsection

@section('contentheader_title')
    {{ __('faq.title') }}
@endsection

@section('contentheader_description')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i> {{ __('message.dashboard') }}</a></li>
        <li><a href="{{ url('/admin/faqs') }}">{{ __('faq.title') }}</a></li>
        <li class="active">{{ __('message.new_add') }}</li>
    </ol>
@endsection

@section('main-content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('message.new_add') }}</h3>
            <div class="box-tools">
                <a href="{{ url('/admin/faqs') }}" class="btn btn-warning btn-sm">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="hidden-xs">{{ __('message.lists') }}</span>
                </a>
            </div>
        </div>

        {!! Form::open(['url' => '/admin/faqs', 'class' => 'form-horizontal']) !!}

        @include('admin.faqs.form')

        {!! Form::close() !!}
    </div>
@endsection
