<div class="form-group">
    {!! Form::label('service_name', 'Service Name : ', ['class' => 'font-weight-bold']) !!}
    {!! Form::text('service_name', $service->service_name ?? '' , ['class' => 'form-control','placeholder'=>'Enter service title']) !!}
</div>
<!-- Content Wrapper. Contains page content -->

<div class="form-group">
    {!! Form::label('service_description', 'Service Description : ', ['class' => ' font-weight-bold']) !!}
    <textarea id="summernote" name="service_description" placeholder="Write about service..">
    {{ $service->service_description ?? '' }}
    </textarea>
</div>

{!! Form::label('service_image', 'Service Image :', ['class' => 'font-weight-bold']) !!}
@if(isset($service->service_image))
<div class="form-group" id="serviceImageDiv">
    <img src="{{ asset(imagePath($service->service_image, 'services')) }}" class="img img-rounded" alt="" style="width: 400px;height:220px">
</div>
@endif
<div class="form-group">
    <img id="serviceImageShow" class="img img-rounded" src="#" alt="" style="" />
</div>

<div class="custom-file mb-2">
    <input type="file" name="service_image" class="custom-file-input" id="serviceImage">
    <label class="custom-file-label" for="serviceImage">Select Service Image</label>
</div>


<div class="form-group">
    <div class="form-check">
        @if($service ?? '')
        <input class="form-check-input" type="checkbox" name="is_featured" {{ $service->is_featured ? 'checked' : ''}}>
        @else
        <input class="form-check-input" type="checkbox" name="is_featured">
        @endif
        <label class="form-check-label"><b>Featured Service</b></label>
    </div>
</div>


{!! Form::label('SEO', 'For Better SEO ', ['class' => 'font-weight-bold']) !!}

  <div class="form-group">
     {!! Form::label('meta_title', 'Blog Meta title : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_title', $blog->meta_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta title']) !!}
 </div>

   <div class="form-group">
     {!! Form::label('meta_tags', 'Blog Meta tags : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_tags', $blog->meta_tags ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta tags']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('meta_description', 'Blog Meta description : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('meta_description', $blog->meta_description ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog meta description']) !!}
 </div>


 <div class="form-group">
     <input type="submit" class="btn btn-success btn-md float-right mb-3" value="{{ $button_text }}">
     <a href="{{ route('backend.services') }}" class="btn btn-primary float-left">Cancel</a>
 </div>


