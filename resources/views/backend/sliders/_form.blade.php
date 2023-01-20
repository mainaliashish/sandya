 <div class="form-group">
     {!! Form::label('slider_title', 'Slider Title : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('slider_title', $slider->slider_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter slider title']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('slider_motto', 'Slider Motto : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('slider_motto', $slider->slider_motto ?? '' , ['class' => 'form-control','placeholder'=>'Enter slider motto']) !!}
 </div>


 <div class="form-group">
     {!! Form::label('slider_description', 'Slider Description : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote" name="slider_description" placeholder="Write about slider..">
     {{ $slider->slider_description ?? '' }}
     </textarea>
 </div>

 @if($slider->slider_image ?? '')
 <div class="form-group">
     <img src="{{ asset(imagePath($slider->slider_image, 'sliders')) }}" alt="" style="width: auto;" height="300px">
 </div>
 @endif

 {!! Form::label('image', 'Slider Image :', ['class' => 'font-weight-bold']) !!}

 <div class="custom-file mb-2">
     <input type="file" name="slider_image" class="custom-file-input" id="chooseFile">
     <label class="custom-file-label" for="chooseFile">Select Image</label>
 </div>

 <div class="form-group">
     <div class="form-check">
         @if($slider ?? '')
         <input class="form-check-input" type="checkbox" name="is_featured" {{ $slider->is_featured ? 'checked' : ''}}>
         @else
         <input class="form-check-input" type="checkbox" name="is_featured">
         @endif
         <label class="form-check-label"><b>Featured Image</b></label>
     </div>
 </div>


<div class="form-group">
    <input type="submit" class="btn btn-success btn-md float-right mb-3" value="{{ $button_text }}">
    <a href="{{ route('backend.sliders') }}" class="btn btn-primary float-left">Cancel</a>
</div>


