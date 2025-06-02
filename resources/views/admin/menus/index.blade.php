@extends('adminlte::layouts.app')
@section('htmlheader_title')
    {{ __('slides.category') }}
@endsection
@section('contentheader_title')
    {{ __('slides.category') }}
@endsection
@section('contentheader_description')
@endsection
@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i> {{ __('message.dashboard') }}</a></li>
        <li class="active">{{ __('slides.category') }}</li>
    </ol>
@endsection
@section('main-content')
    <div class="box">
        <div class="content-header border-bottom pb-5">
            <h5 class="float-left">
                {{ __('message.lists') }}
            </h5>
            @can('MenuController@store')
                <a href="{{ url('/admin/menus/create') }}" class="btn btn-default float-right" title="{{ __('message.new_add') }}">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> <span class="hidden-xs">
                        {{ __('message.new_add') }}</span>
                </a>
            @endcan
        </div>
        <div class="box-header">
            <div class="box-tools">
                {!! Form::open(['method' => 'GET', 'url' => '/admin/menus', 'class' => 'pull-left', 'role' => 'search']) !!}
                <div class="input-group" style="margin-right: 5px; display:flex;">
                    <input type="text" value="{{ \Request::get('search') }}" class="form-control input-sm" name="search"
                        placeholder="{{ __('message.search_keyword') }}" style="width: 250px; margin-right: 5px;">
                    <button class="btn btn-secondary btn-sm" type="submit">
                        <i class="fa fa-search"></i> {{ __('message.search') }}
                    </button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
        @php($index = ($menus->currentPage() - 1) * $menus->perPage())
        <div class="box-body no-padding">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th class="text-center" style="width: 3.5%;">
                            <input type="checkbox" name="chkAll" id="chkAll" />
                        </th>
                        <th class="text-center" style="width: 3.5%">{{ trans('message.index') }}</th>
                        <th>@sortablelink('title', trans('slides.title'))</th>
                        <th class="text-center">{{ trans('slides.position') }}</th>
                        <th class="text-center">{{ trans('slides.arrange') }}</th>
                        <th class="text-center">{{ trans('slides.active') }}</th>
                        <th style="width: 7%;"></th>
                    </tr>
                    @foreach ($menus as $parent)
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="chkId" id="chkId" value="{{ $parent->id }}"
                                    data-id="{{ $parent->id }}" />
                            </td>
                            <td class="text-center">{{ ++$index }}</td>
                            <td class="">
                                <a href="{{ url('/admin/menus/' . $parent->id) }}" style="color: black;">
                                    <strong>{{ $parent->title }}</strong>
                                </a>
                            </td>
                            <td>
                                <div class="row gap-2">
                                    @foreach ($parent->positions as $position)
                                        <div class="col-6 py-2">{{ $position->title }}</div>
                                    @endforeach
                                </div>
                            </td>
                            
                            <td class="text-center d-flex align-items-center justify-content-center gap-2">
                                <input type="text" class="w-25 form-control arrange-input"
                                    value="{{ $parent->arrange }}" data-id="{{ $parent->id }}" />
                                <button class="btn btn-primary ml-2 btn-update-arrange" data-id="{{ $parent->id }}">
                                    Thay đổi
                                </button>
                            </td>
                            <td class="text-center">
                                {!! $parent->approved == config('settings.active') ? '<i class="fa fa-check text-primary"></i>' : '' !!}
                            </td>

                            <td class="dropdown">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fal fa-tools"></i>
                                </button>
                                <div class="dropdown-menu p-0">
                                    @can('MenuController@show')
                                        <a href="{{ url('/admin/menus/' . $parent->id) }}"
                                            title="{{ __('message.user.view_user') }}"><button
                                                class="btn btn-info btn-sm dropdown-item"><i class="fas fa-eye"></i>
                                                {{ __('message.view') }}</button></a>
                                    @endcan
                                    @can('MenuController@update')
                                        <a href="{{ url('/admin/menus/' . $parent->id . '/edit') }}"
                                            title="{{ __('message.user.edit_user') }}"><button
                                                class="btn btn-primary btn-sm dropdown-item"><i class="far fa-edit"
                                                    aria-hidden="true"></i>
                                                {{ __('message.edit') }}</button></a>
                                    @endcan
                                    @can('MenuController@destroy')
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'url' => ['/admin/menus', $parent->id],
                                            'style' => 'display:inline',
                                        ]) !!}
                                        {!! Form::button('<i class="far fa-trash-alt" aria-hidden="true"></i> ' . __('message.delete'), [
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-sm dropdown-item show_confirm',
                                            'title' => __('message.user.delete_user'),
                                            // 'onclick'=>'return confirm("'.__('message.confirm_delete').'")'
                                        ]) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </div>
                            </td>
                        </tr>

                        @foreach ($parent->children as $child)
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" name="chkId" id="chkId" value="{{ $child->id }}"
                                        data-id="{{ $child->id }}" />
                                </td>
                                <td class="text-center"> - </td>
                                <td class="">
                                    <a href="{{ url('/admin/menus/' . $child->id) }}" style="color: gray;">
                                        &nbsp;&nbsp;&nbsp;└ {{ $child->title }}
                                    </a>
                                </td>
                                <td>
                                    <div class="row gap-2">
                                        @foreach ($child->positions as $position)
                                            <div class="col-6 py-2">{{ $position->title }}</div>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="text-center d-flex align-items-center justify-content-center gap-2">
                                    <input type="text" class="w-25 form-control arrange-input"
                                        value="{{ $child->arrange }}" data-id="{{ $child->id }}" />
                                    <button class="btn btn-primary ml-2 btn-update-arrange" data-id="{{ $child->id }}">
                                        Thay đổi
                                    </button>
                                </td>
                                <td class="text-center">
                                    {!! $child->approved == config('settings.active') ? '<i class="fa fa-check text-primary"></i>' : '' !!}
                                </td>

                                <td class="dropdown">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fal fa-tools"></i>
                                    </button>
                                    <div class="dropdown-menu p-0">
                                        @can('MenuController@show')
                                            <a href="{{ url('/admin/menus/' . $child->id) }}"
                                                title="{{ __('message.user.view_user') }}"><button
                                                    class="btn btn-info btn-sm dropdown-item"><i class="fas fa-eye"></i>
                                                    {{ __('message.view') }}</button></a>
                                        @endcan
                                        @can('MenuController@update')
                                            <a href="{{ url('/admin/menus/' . $child->id . '/edit') }}"
                                                title="{{ __('message.user.edit_user') }}"><button
                                                    class="btn btn-primary btn-sm dropdown-item"><i class="far fa-edit"
                                                        aria-hidden="true"></i>
                                                    {{ __('message.edit') }}</button></a>
                                        @endcan
                                        @can('MenuController@destroy')
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/menus', $child->id],
                                                'style' => 'display:inline',
                                            ]) !!}
                                            {!! Form::button('<i class="far fa-trash-alt" aria-hidden="true"></i> ' . __('message.delete'), [
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-sm dropdown-item show_confirm',
                                                'title' => __('message.user.delete_user'),
                                                // 'onclick'=>'return confirm("'.__('message.confirm_delete').'")'
                                            ]) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            {!! $menus->appends(\Request::except('page'))->render() !!}
        </div>
    </div>
@endsection
@section('scripts-footer')
    <script>
        $(document).ready(function() {
            $('.btn-update-arrange').click(function() {
                var id = $(this).data('id');
                var arrange = $('.arrange-input[data-id="' + id + '"]').val();

                $.ajax({
                    url: '{{ route('menus.updateArrange') }}',
                    method: 'POST',
                    data: {
                        id: id,
                        arrange: arrange,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Lỗi!',
                                text: 'Có lỗi xảy ra, vui lòng thử lại.'
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi Server!',
                            text: xhr.responseText
                        });
                    }
                });
            });
        });
    </script>
@endsection
