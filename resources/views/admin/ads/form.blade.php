<div class="box-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p><i class="fa fa-fw fa-times"></i> {{ $error }}</p>
            @endforeach
        </div>
    @endif
    <table class="table table-condensed">

        <tr class="row {{ $errors->has('title') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('title', trans('ads.title'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::text('title', null, ['class' => 'form-control input-sm']) !!}
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>
        <tr class="row {{ $errors->has('link') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('link', trans('ads.link'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::text('link', null, ['class' => 'form-control input-sm']) !!}
                {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>

        <tr class="row {{ $errors->has('position') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('position', trans('ads.position'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::select('position', $positions->pluck('comment', 'id'), null, ['class' => 'form-control input-sm']) !!}
                {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>

        <tr class="row {{ $errors->has('avatar') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('avatar', trans('ads.avatar'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                <div>
                    <div class="input-group inputfile-wrap ">
                        <input type="text" class="form-control input-sm" readonly />
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-sm">
                                <i class=" fa fa-upload"></i>
                                {{ __('message.upload') }}
                            </button>
                            {!! Form::file(
                                'avatar',
                                array_merge(['id' => 'image', 'class' => 'form-control input-sm', 'accept' => 'image/*']),
                            ) !!}
                        </div>
                        {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="imgprev-wrap" style="display:{{ !empty($ads->pathimage) ? 'block' : 'none' }}">
                        <input type="hidden" value="" name="img-hidden" />
                        <img class="img-preview"
                            src="{{ !empty($ads->pathimage) ? asset( $ads->pathimage) : '' }}"
                            alt="{{ trans('ads.avatar') }}" />
                        <i class="fa fa-trash text-danger"></i>
                    </div>
                </div>
            </td>
        </tr>
        <tr class="row {{ $errors->has('arrange') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('arrange', trans('ads.arrange'), ['class' => 'control-label label-required']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::number('arrange', null, ['class' => 'form-control input-sm', 'required' => 'required']) !!}
                {!! $errors->first('arrange', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>
        {{-- Editor --}}
        {{-- <tr class="row {{ $errors->has('description') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('description', trans('ads.description'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::textarea('description', null, ['class' => 'form-control input-sm ', 'rows' => 5]) !!}
            </td>
        </tr> --}}
        <tr class="row {{ $errors->has('approved') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('approved', trans('news.active'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::checkbox('approved', 1, isset($ads) && +$ads->approved === 1 ? true : false, [
                    'class' => 'flat-blue',
                    'id' => 'approved',
                ]) !!}
            </td>
        </tr>
    </table>
</div>
<div class="box-footer">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : __('message.save'), [
        'class' => 'btn btn-md btn-info',
    ]) !!}
    <a href="{{ url('/admin/videos') }}" class="btn btn-secondary">{{ __('message.close') }}</a>
</div>
@section('scripts-footer')
    <script type="text/javascript" src="{{ asset('plugins/ckeditor_full/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ckfinder/ckfinder.js') }}"></script>
    <script>
        CKFinder.config({
            connectorPath: '/ckfinder/connector'
        });
    </script>
    <script>
        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
        });
    </script>
    @include('ckfinder::setup')
    <script type="text/javascript">
        $(function() {
            $('#image').change(function() {
                var preview = document.querySelector('img.img-preview');
                var file = document.querySelector('#image').files[0];
                var reader = new FileReader();

                if (/\.(jpe?g|png|gif)$/i.test(file.name)) {

                    reader.addEventListener("load", function() {
                        preview.src = reader.result;
                        $('.imgprev-wrap').css('display', 'block');
                        $('.inputfile-wrap').find('input[type=text]').val(file.name);
                    }, false);

                    if (file) {
                        reader.readAsDataURL(file);
                    }
                } else {
                    document.querySelector('#image').value = '';
                    $('.imgprev-wrap').find('input[type=hidden]').val('');
                }
            });

            $('.imgprev-wrap .fa-trash').click(function() {
                var preview = document.querySelector('img.img-preview');

                if (confirm('Bạn muốn xóa hình ảnh này không?')) {
                    preview.src = '';
                    $('.imgprev-wrap').css('display', 'none');
                    $('.inputfile-wrap').find('input[type=text]').val('');
                }
            })
        });
    </script>
@endsection
