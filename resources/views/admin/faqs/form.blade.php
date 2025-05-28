<div class="box-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p><i class="fa fa-fw fa-times"></i> {{ $error }}</p>
            @endforeach
        </div>
    @endif

    <table class="table table-condensed">
        {{-- Câu hỏi --}}
        <tr class="row">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('question', 'Câu hỏi', ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                @if (isset($faq))
                    <p class="form-control-static">{{ $faq->question }}</p>
                    {!! Form::hidden('question', $faq->question) !!}
                @else
                    {!! Form::text('question', null, [
                        'class' => 'form-control input-sm',
                    ]) !!}
                    {!! $errors->first('question', '<p class="help-block">:message</p>') !!}
                @endif
            </td>
        </tr>



        {{-- Editor --}}
        <tr class="row {{ $errors->has('answer') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('answer', trans('faq.answer'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::textarea('answer', null, ['class' => 'form-control input-sm ', 'rows' => 5]) !!}
            </td>
        </tr>

        {{-- Thứ tự --}}
        {{-- <tr class="row {{ $errors->has('arrange') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('arrange', trans('faq.arrange'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::number('arrange', null, ['class' => 'form-control input-sm']) !!}
                {!! $errors->first('arrange', '<p class="help-block">:message</p>') !!}
            </td>
        </tr> --}}

        {{-- Trạng thái --}}
        <tr class="row {{ $errors->has('approved') ? 'has-error' : '' }}">
            <td class="col-md-4 col-lg-3">
                {!! Form::label('approved', trans('faq.approved'), ['class' => 'control-label']) !!}
            </td>
            <td class="col-md-8 col-lg-9">
                {!! Form::checkbox('approved', 1, isset($faq) && +$faq->approved === 1 ? true : false, [
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
    <a href="{{ url('/admin/faqs') }}" class="btn btn-secondary">{{ __('message.close') }}</a>
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
        CKEDITOR.replace('answer', {
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
