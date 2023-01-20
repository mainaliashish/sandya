 <div class="form-group">
     {!! Form::label('title', 'Blog Title : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('title', $blog->title ?? '' , ['class' => 'form-control','placeholder'=>'Enter blog title']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('category_id', 'Category:', ['class' => 'font-weight-bold']) !!}
     <select class="form-control" name="category_id">
         @if(isset($categories) && count($categories) > 0)
         @foreach ($categories as $category)
         <option value="{{ $category->id }}" {{ $category->id === ($blog->category->id ?? '') ? ' selected' : '' }}>{{ $category->name ?? '' }}</option>
         @endforeach
         @endif
     </select>
 </div>

 <div class="form-group">
     {!! Form::label('content', 'Description : ', ['class' => ' font-weight-bold']) !!}
     <textarea id="summernote" name="content" placeholder="">
     {{ $blog->content ?? '' }}
     </textarea>
 </div>

 @if($blog->image ?? '')
 <div class="form-group">
     <img src="{{ asset(imagePath($blog->image, 'blogs')) }}" alt="" style="width: auto;" height="300px">
 </div>
 @endif

 <div class="form-group">
     {!! Form::label('image', 'Blog Image :', ['class' => 'font-weight-bold']) !!}
     <br/>
     {!! Form::file('image') !!}
 </div>


 <div class="form-group">
     <div class="form-check">
         @if($blog ?? '')
         <input class="form-check-input" type="checkbox" name="is_featured" {{ $blog->is_featured ? 'checked' : ''}}>
         @else
         <input class="form-check-input" type="checkbox" name="is_featured">
         @endif
         <label class="form-check-label"><b>Featured Blog</b></label>
     </div>
 </div>
 <div class="form-group">
     <div class="form-check">
         @if($blog ?? '')
         <input class="form-check-input" type="checkbox" name="is_trending" {{ $blog->is_trending ? 'checked' : ''}}>
         @else
         <input class="form-check-input" type="checkbox" name="is_trending">
         @endif
         <label class="form-check-label"><b>Trending Blog</b></label>
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
    <a href="{{ route('backend.blogs') }}" class="btn btn-primary float-left">Cancel</a>
</div>


