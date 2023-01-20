 <div class="form-group">
     {!! Form::label('client_title', 'Client Title : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('client_title', $slider->client_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter Client title']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('client_description', 'Client Description : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote" name="client_description" placeholder="Write about client..">
     {{ $slider->client_description ?? '' }}
     </textarea>
 </div>

 @if($client->client_logo ?? '')
 <div class="form-group">
     <img src="{{ asset(imagePath($client->client_logo, 'clients')) }}" alt="" style="width: auto;" height="300px">
 </div>
 @endif

 {!! Form::label('image', 'Client Image :', ['class' => 'font-weight-bold']) !!}

 <div class="custom-file mb-2">
     <input type="file" name="client_logo" class="custom-file-input" id="chooseFile">
     <label class="custom-file-label" for="chooseFile">Select Image</label>
 </div>

 <div class="form-group">
     <div class="form-check">
         @if($client ?? '')
         <input class="form-check-input" type="checkbox" name="is_featured" {{ $client->is_featured ? 'checked' : ''}}>
         @else
         <input class="form-check-input" type="checkbox" name="is_featured">
         @endif
         <label class="form-check-label"><b>Featured Image</b></label>
     </div>
 </div>


<div class="form-group">
    <input type="submit" class="btn btn-success btn-md float-right mb-3" value="{{ $button_text }}">
    <a href="{{ route('backend.clients') }}" class="btn btn-primary float-left">Cancel</a>
</div>


