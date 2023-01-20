 <div class="form-group">
     {!! Form::label('title', 'Title : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('title', $announcement->title ?? '' , ['class' => 'form-control','placeholder'=>'Enter announcement title']) !!}
 </div>


 <div class="form-group">
     {!! Form::label('description', 'Description : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote" name="description" placeholder="">
     {{ $announcement->description ?? '' }}
     </textarea>
 </div>

 @if($announcement->image ?? '')
 <div class="form-group">
     <img src="{{ asset(imagePath($announcement->image, 'announcements')) }}" alt="" style="width: auto;" height="300px">
 </div>
 @endif

 <div class="form-group">
     {!! Form::label('image', 'Announcement Image :', ['class' => 'font-weight-bold']) !!}
     <br />
     {!! Form::file('image') !!}
 </div>


 <div class="form-group">
     <div class="form-check">
         @if($announcement ?? '')
         <input class="form-check-input" type="checkbox" name="is_featured" {{ $announcement->is_featured ? 'checked' : ''}}>
         @else
         <input class="form-check-input" type="checkbox" name="is_featured">
         @endif
         <label class="form-check-label"><b>Featured announcement</b></label>
     </div>
 </div>

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
     <a href="{{ route('backend.announcements') }}" class="btn btn-primary float-left">Cancel</a>
 </div>

