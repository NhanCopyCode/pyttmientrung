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
        <li class="active">{{ __('message.new_add') }}</li>
    </ol>
@endsection

@section('main-content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('message.new_add') }}</h3>
            <div class="box-tools">
                <a href="{{ url('/admin/menus') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> <span class="hidden-xs">{{ __('message.lists') }}</span></a>
            </div>
        </div>

        {!! Form::open(['url' => '/admin/menus', 'class' => 'form-horizontal', 'files' => true]) !!}

        @include('admin.menus.form')

        {!! Form::close() !!}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ptypeidSelect = document.getElementById('ptypeid');
            const positionRow = document.getElementById('position-row');
            console.log('positionRow: create ', positionRow)

            function togglePositionRow() {
                const value = ptypeidSelect.value;
                if (value !== '0') {
                    positionRow.style.display = 'none';
                } else {
                    positionRow.style.display = '';
                }
            }
            togglePositionRow();
            ptypeidSelect.addEventListener('change', togglePositionRow);
        });
    </script>
@endsection

