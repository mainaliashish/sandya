@extends('backend.layouts.app')

@section('main-content')

    @include('backend.partials._content-header', ['header_title'=> 'Update About Us'])

    <!-- Main content -->
    <section class="content mt-0">
        <!-- Default box -->
        <div class="card">
            <div class="col-12 col-md-12 col-sm-12 center">
                {!! Form::model($about, ['method'=>'PATCH', 'route' => ['backend.accounts.updateabout', $about->id],'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('site_name', 'Site Name : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('site_name', $about->site_name ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('opening_hours', 'Opening Hours : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('opening_hours', $about->opening_hours ?? '' , ['class' => 'form-control','placeholder'=>'Enter site opening hours']) !!}
                </div>

                <div class="form-group">

                    {!! Form::label('site_description', 'Site Description : ', ['class' => ' font-weight-bold']) !!}
                    <textarea class="summernote" name="site_description">
                    {{ $about->site_description ?? 'Write about company' }}
                    </textarea>
                </div>

                <div class="form-group">
                    {!! Form::label('site_mission', 'Site Mission : ', ['class' => ' font-weight-bold']) !!}
                    <textarea class="summernote" name="site_mission">
                {!! $about->site_mission ?? 'Write about company mission' !!}
              </textarea>
                </div>

                {!! Form::label('site_logo', 'Site Logo :', ['class' => 'font-weight-bold']) !!}
                @if(isset($about->site_logo))
                <div class="form-group" id="logoImageDiv">
                    <img src="{{ asset(imagePath($about->site_logo, 'abouts')) }}" class="img img-rounded" alt="" style="width: 320px;height:220px">
                </div>
                @endif
                <div class="form-group">
                    <img id="logoImageShow" class="img img-rounded" src="#" alt="" style="" />
                </div>
                
                <div class="custom-file mb-2">
                    <input type="file" name="site_logo" class="custom-file-input" id="logoImage">
                    <label class="custom-file-label" for="logoImage">Select Logo:</label>
                </div>

                <div class="form-group">
                    {!! Form::label('address', 'Address One : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('address', $about->address ?? '' , ['class' => 'form-control','placeholder'=>'Enter company address']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address_one', 'Company Address : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('address_one', $about->address_one ?? '' , ['class' => 'form-control','placeholder'=>'Enter company address']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('contact_number_one', 'Phone 1 : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('contact_number_one', $about->contact_number_one ?? '' , ['class' => 'form-control','placeholder'=>'Enter site number']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('contact_number_two', 'Phone 2 : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('contact_number_two', $about->contact_number_two ?? '' , ['class' => 'form-control','placeholder'=>'Enter site number']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('contact_number_three', 'Phone 3 : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('contact_number_three', $about->contact_number_three ?? '' , ['class' => 'form-control','placeholder'=>'Enter site number']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email_one', 'Company Email One : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('email_one', $about->email_one ?? '' , ['class' => 'form-control','placeholder'=>'Enter site email']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email_two', 'Company Email Two : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('email_two', $about->email_two ?? '' , ['class' => 'form-control','placeholder'=>'Enter site email']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('facebook', 'Company facebook : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('facebook', $about->facebook ?? '' , ['class' => 'form-control','placeholder'=>'Enter facebook']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('twitter', 'Company twitter : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('twitter', $about->twitter ?? '' , ['class' => 'form-control','placeholder'=>'Enter twitter']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('instagram', 'Company instagram : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('instagram', $about->instagram ?? '' , ['class' => 'form-control','placeholder'=>'Enter instagram']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('site_vision', 'Site Vision : ', ['class' => ' font-weight-bold']) !!}
                    <textarea class="summernote" name="site_vision">
                        {!! $about->site_vision ?? 'Write about company vision' !!}
                    </textarea>
                </div>

                <div class="form-group">
                    {!! Form::label('site_why_us', 'Why us : ', ['class' => ' font-weight-bold']) !!}
                    <textarea class="summernote" name="site_why_us">
                        {!! $about->site_why_us ?? 'Why choose us?' !!}
                    </textarea>
                </div>

                <div class="form-group">
                    {!! Form::label('site_policy', 'Site Policy : ', ['class' => ' font-weight-bold']) !!}
                    <textarea class="summernote" name="site_policy">
                        {!! $about->site_policy ?? 'Write about company policy' !!}
                    </textarea>
                </div>


                {!! Form::label('site_image', 'Site Image :', ['class' => 'font-weight-bold']) !!}
                @if(isset($about->site_image))
                <div class="form-group" id="imageImageDiv">
                    <img src="{{ asset(imagePath($about->site_image, 'abouts')) }}" class="img img-rounded" alt="" style="width: 320px;height:220px">
                </div>
                @endif
                <div class="form-group">
                    <img id="imageImageShow" class="img img-rounded" src="#" alt="" style="" />
                </div>

                <div class="custom-file mb-2">
                    <input type="file" name="site_image" class="custom-file-input" id="imageImage">
                    <label class="custom-file-label" for="imageImage">Select Site Image:</label>
                </div>
                
                {!! Form::label('SEO', 'For Better SEO ', ['class' => 'font-weight-bold']) !!}

                <div class="form-group">
                    {!! Form::label('meta_title', 'Blog Meta title : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('meta_title', $about->meta_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter about meta title']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('meta_tags', 'About Meta tags : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('meta_tags', $about->meta_tags ?? '' , ['class' => 'form-control','placeholder'=>'Enter about meta tags']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('meta_description', 'About Meta description : ', ['class' => 'font-weight-bold']) !!}
                    {!! Form::text('meta_description', $about->meta_description ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta description']) !!}
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-md float-right mb-3" value="Save Changes">
                    <a href="{{ route('backend.dashboard') }}" class="btn btn-primary float-left">Cancel</a>
                </div>


            </div>
        </div>
</section>
<!-- /.content -->
@endsection

@section('headerElements')
<link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('footerelements')
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function() {
        // Summernote
        $('.summernote').summernote({
            toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['para', ['ol', 'ul', 'paragraph', 'height']]
                , ['table', ['table']]
                , ['insert', ['link']]
                , ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
            ]
        });
              
    });

</script>

<script>
    logoImage.onchange = evt => {
        const [file] = logoImage.files
        if (file) {
            logoImageShow.src = URL.createObjectURL(file)
            $('#logoImageShow').css({
                "height": "220px"
                , "width": "320px"
            })
            $('#logoImageDiv').remove();
        }
    }

</script>

<script>
    imageImage.onchange = evt => {
        const [file] = imageImage.files
        if (file) {
            imageImageShow.src = URL.createObjectURL(file)
            $('#imageImageShow').css({
                "height": "220px"
                , "width": "320px"
            })
            $('#imageImageDiv').remove();
        }
    }

</script>




@endsection
