 <div class="form-group">
     {!! Form::label('title', 'Title : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('title', $event->title ?? '' , ['class' => 'form-control','placeholder'=>'Enter event title']) !!}
 </div>

<div class="form-group">
    {!! Form::label('event_date', 'Event Date : ', ['class' => ' font-weight-bold']) !!}
    <div class="input-group date" id="reservationdate" data-target-input="nearest">
        <input type="text" name="event_date" value="{{ $event->event_date ?? '' }}" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="{{ $event->event_date ?? 'Event Date' }}" />
        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
    </div>
</div>

 <div class="form-group">
     {!! Form::label('description', 'Description : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote" name="description" placeholder="">
     {{ $event->description ?? '' }}
     </textarea>
 </div>

 @if($event->image ?? '')
 <div class="form-group">
     <img src="{{ asset(imagePath($event->image, 'events')) }}" alt="" style="width: auto;" height="300px">
 </div>
 @endif

 <div class="form-group">
     {!! Form::label('image', 'Event Image :', ['class' => 'font-weight-bold']) !!}
     <br />
     {!! Form::file('image') !!}
 </div>


 <div class="form-group">
     <div class="form-check">
         @if($event ?? '')
         <input class="form-check-input" type="checkbox" name="is_featured" {{ $event->is_featured ? 'checked' : ''}}>
         @else
         <input class="form-check-input" type="checkbox" name="is_featured">
         @endif
         <label class="form-check-label"><b>Featured event</b></label>
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
     <a href="{{ route('backend.events') }}" class="btn btn-primary float-left">Cancel</a>
 </div>

