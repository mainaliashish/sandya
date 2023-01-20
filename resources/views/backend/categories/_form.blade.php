 <div class="form-group">
     {!! Form::label('name', 'Category Name : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('name', $category->name ?? '' , ['class' => 'form-control','placeholder'=>'Enter category name']) !!}
 </div>

 <div class="form-group">
     <div class="form-check">
         @if($category ?? '')
         <input class="form-check-input" type="checkbox" name="is_featured" {{ $category->is_featured ? 'checked' : ''}}>
         @else
         <input class="form-check-input" type="checkbox" name="is_featured">
         @endif
         <label class="form-check-label"><b>Featured category</b></label>
     </div>
 </div>

 <div class="form-group">
     <input type="submit" class="btn btn-primary btn-md" value="{{ $button_text }}">
 </div>

 </div>
