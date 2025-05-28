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
        <li class="active">{{ __('faq.title') }}</li>
    </ol>
@endsection
@section('main-content')
    <div class="box">
        <div class="content-header border-bottom pb-5">
            <h5 class="float-left">
                {{ __('message.lists') }}
            </h5>
            {{-- @can('FaqController@store')
                <a href="{{ url('/admin/faqs/create') }}" class="btn btn-default float-right" title="{{ __('message.new_add') }}">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> <span class="hidden-xs">
                        {{ __('message.new_add') }}</span>
                </a>
            @endcan --}}
        </div>
        <div class="box-header">
            <div class="box-tools">
                {!! Form::open(['method' => 'GET', 'url' => '/admin/faqs', 'class' => 'pull-left', 'role' => 'search']) !!}
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
        @php($index = ($faqs->currentPage() - 1) * $faqs->perPage())
        <div class="box-body no-padding">
            <div class="mb-2">
                <strong>{{ trans('faq.unapproved_count') }}:</strong>
                <span class="text-danger">{{ $notApprovedCount }}</span>
            </div>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 3.5%;">
                            <input type="checkbox" name="chkAll" id="chkAll" />
                        </th>
                        <th class="text-center" style="width: 3.5%">{{ trans('message.index') }}</th>
                        <th class="text-center">{{ trans('faq.email') }}</th>
                        <th class="text-center">{{ trans('faq.question') }}</th>
                        <th class="text-center">{{ trans('faq.answer') }}</th>
                        <th class="text-center">{{ trans('faq.approved') }}</th>
                        <th class="text-center">{{ trans('faq.postdate') }}</th>
                        <th class="text-center" style="width: 7%;"></th>
                    </tr>
                </thead>
                <tbody>
                    @php($index = ($faqs->currentPage() - 1) * $faqs->perPage())
                    @foreach ($faqs as $item)
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="chkId" id="chkId" value="{{ $item->id }}"
                                    data-id="{{ $item->id }}" />
                            </td>
                            <td class="text-center">{{ ++$index }}</td>

                            <td class="text-center">{{ $item->email }}</td>
                            <td class="text-left">
                                <a href={{ url('/admin/faqs/' . $item->id . '/edit') }}>
                                    {{ Str::limit(strip_tags($item->question), 200) }}
                                </a>
                            </td>
                            <td class="text-center">
                                @if (!empty(strip_tags($item->answer)))
                                    <span class="text-success">Đã có câu trả lời</span>
                                @else
                                    <span class="text-danger">Chưa có câu trả lời</span>
                                @endif
                            </td>


                            <td class="text-center">
                                {!! $item->approved == config('settings.active')
                                    ? '<i class="fa fa-check text-primary"></i>'
                                    : '<i class="fa fa-times text-danger"></i>' !!}
                            </td>
                            <td class="text-center">
                                {{ \Carbon\Carbon::parse($item->postdate)->format(config('settings.format.date')) }}
                            </td>
                            <td class="dropdown text-center">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fal fa-tools"></i>
                                </button>
                                <div class="dropdown-menu p-0">
                                    @can('FaqController@show')
                                        <a href="{{ url('/admin/faqs/' . $item->id) }}" title="{{ __('message.view') }}">
                                            <button class="btn btn-info btn-sm dropdown-item">
                                                <i class="fas fa-eye"></i> {{ __('message.view') }}
                                            </button>
                                        </a>
                                    @endcan
                                    @can('FaqController@update')
                                        <a href="{{ url('/admin/faqs/' . $item->id . '/edit') }}"
                                            title="{{ __('message.edit') }}">
                                            <button class="btn btn-primary btn-sm dropdown-item">
                                                <i class="far fa-edit" aria-hidden="true"></i> {{ __('message.edit') }}
                                            </button>
                                        </a>
                                    @endcan
                                    @can('FaqController@destroy')
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'url' => ['/admin/faqs', $item->id],
                                            'style' => 'display:inline',
                                        ]) !!}
                                        {!! Form::button('<i class="far fa-trash-alt" aria-hidden="true"></i> ' . __('message.delete'), [
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-sm dropdown-item show_confirm',
                                            'title' => __('message.delete'),
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
            {!! $faqs->appends(\Request::except('page'))->render() !!}
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
