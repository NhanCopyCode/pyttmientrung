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
            @can('VideoController@store')
                <a href="{{ url('/admin/videos/create') }}" class="btn btn-default float-right"
                    title="{{ __('message.new_add') }}">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> <span class="hidden-xs">
                        {{ __('message.new_add') }}</span>
                </a>
            @endcan
        </div>
        <div class="box-header">
            <div class="box-tools">
                {!! Form::open(['method' => 'GET', 'url' => '/admin/videos', 'class' => 'pull-left', 'role' => 'search']) !!}
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
        @php($index = ($videos->currentPage() - 1) * $videos->perPage())
        <div class="box-body no-padding">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th class="text-center" style="width: 3.5%;">
                            <input type="checkbox" name="chkAll" id="chkAll" />
                        </th>
                        <th class="text-center" style="width: 3.5%">{{ trans('message.index') }}</th>
                        <th>@sortablelink('title', trans('slides.title'))</th>
                        <th class="text-center">{{ trans('videos.pathfile') }}</th>
                        <th class="text-center">{{ trans('videos.arrange') }}</th>

                        <th class="text-center">{{ trans('slides.active') }}</th>
                        <th class="text-center">{{ trans('slides.updated_at') }}</th>
                        <th style="width: 7%;"></th>
                    </tr>
                    @foreach ($videos as $item)
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="chkId" id="chkId" value="{{ $item->id }}"
                                    data-id="{{ $item->id }}" />
                            </td>
                            <td class="text-center">{{ ++$index }}</td>
                            @can('VideoController@show')
                                <td class="text-center" style="width: 200px;"><a class="d-inline-block text-center"
                                        href="{{ url('/admin/videos') . '/' . $item->id }}" style="color: black;">
                                        {{ $item->title }}
                                    </a></td>
                            @endcan
                            <td class="text-center">
                                <a href=" {{ $item->pathfile }}" target="_blank"> {{ $item->pathfile }} </a>
                            </td>
                            <td class="text-center d-flex align-items-center justify-content-center gap-2">
                                <input type="text" class="w-25 form-control arrange-input" value="{{ $item->arrange }}"
                                    data-id="{{ $item->id }}" />
                                <button class="btn btn-primary ml-2 btn-update-arrange" data-id="{{ $item->id }}">
                                    Thay đổi
                                </button>
                            </td>
                            <td class="text-center">{!! $item->approved == config('settings.active') ? '<i class="fa fa-check text-primary"></i>' : '' !!}</td>
                            <td class="text-center">
                                {{ Carbon\Carbon::parse($item->postdate)->format(config('settings.format.date')) }}</td>

                            <td class="dropdown">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fal fa-tools"></i>
                                </button>
                                <div class="dropdown-menu p-0">
                                    @can('VideoController@show')
                                        <a href="{{ url('/admin/videos/' . $item->id) }}"
                                            title="{{ __('message.user.view_user') }}"><button
                                                class="btn btn-info btn-sm dropdown-item"><i class="fas fa-eye"></i>
                                                {{ __('message.view') }}</button></a>
                                    @endcan
                                    @can('VideoController@update')
                                        <a href="{{ url('/admin/videos/' . $item->id . '/edit') }}"
                                            title="{{ __('message.user.edit_user') }}"><button
                                                class="btn btn-primary btn-sm dropdown-item"><i class="far fa-edit"
                                                    aria-hidden="true"></i>
                                                {{ __('message.edit') }}</button></a>
                                    @endcan
                                    @can('VideoController@destroy')
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'url' => ['/admin/videos', $item->id],
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
                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            {!! $videos->appends(\Request::except('page'))->render() !!}
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
                    url: '{{ route('videos.updateArrange') }}',
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
