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
                {!! Form::label('title', trans('posts.title'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::text('title', null, ['class' => 'form-control input-sm']) !!}
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>

        {{-- <tr class="row {{ $errors->has('pathfile') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('pathfile', trans('posts.pathfile'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::text('pathfile', null, ['class' => 'form-control input-sm']) !!}
                {!! $errors->first('pathfile', '<p class="help-block">:message</p>') !!}
            </td>
        </tr> --}}
        <tr class="row {{ $errors->has('ptypeid') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('ptypeid', 'Chọn Menu', ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::select('ptypeid', $list_menu, old('ptypeid', $post->ptypeid ?? null), [
                    'class' => 'form-control input-sm',
                ]) !!}

                {!! $errors->first('ptypeid', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>

        <tr class="row {{ $errors->has('avatar') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('avatar', trans('posts.avatar'), ['class' => 'control-label']) !!}
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
                    <div class="imgprev-wrap" style="display:{{ !empty($post->pathimage) ? 'block' : 'none' }}">
                        <input type="hidden" value="" name="img-hidden" />
                        <img class="img-preview" src="{{ !empty($post->pathimage) ? asset($post->pathimage) : '' }}"
                            alt="{{ trans('posts.avatar') }}" />
                        <i class="fa fa-trash text-danger"></i>
                    </div>
                </div>
            </td>
        </tr>

        {{-- Editor --}}
        <tr class="row {{ $errors->has('content') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('content', trans('posts.content'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::textarea('content', null, ['class' => 'form-control input-sm ', 'rows' => 5]) !!}
            </td>
        </tr>

        <tr class="row {{ $errors->has('summary') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('summary', trans('posts.summary'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::text('summary', null, ['class' => 'form-control input-sm']) !!}
                {!! $errors->first('summary', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>

        {{-- <tr class="row {{ $errors->has('arrange') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('arrange', trans('slides.arrange'), ['class' => 'control-label label-required']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::number('arrange', null, ['class' => 'form-control input-sm', 'required' => 'required']) !!}
                {!! $errors->first('arrange', '<p class="help-block">:message</p>') !!}
            </td>
        </tr> --}}

        <tr class="row {{ $errors->has('approved') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('approved', trans('news.active'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::checkbox('approved', 1, isset($post) && +$post->approved === 1 ? true : false, [
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
    <a href="{{ url('/admin/posts') }}" class="btn btn-secondary">{{ __('message.close') }}</a>
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
        CKEDITOR.replace('content', {
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
