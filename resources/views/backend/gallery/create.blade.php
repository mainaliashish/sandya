@extends('backend.layouts.app')
{{-- {{dd($gallery)}} --}}
@section('main-content')
 <!-- Content Wrapper. Contains page content -->
@include('backend.partials._content-header', ['header_title' => 'Upload Gallery Image'])


       <section class="content">

      <!-- Default box -->
      <div class="card">
        <br />
        <div class="col-12 col-md-12 col-sm-12 center">
          @if($gallery ?? '')
		        {!! Form::model($gallery, ['method'=>'PATCH', 'route' => ['backend.gallery.update', $gallery], 'files'=>true]) !!}
	      	@else
			    {!! Form::open(array('method'=>'POST','route' => 'backend.gallery.store', 'files'=>true)) !!}
		      @endif

            <div class="form-group">
              {!! Form::label('title', 'Image Title : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('title', $gallery->title ?? '' , ['class' => 'form-control','placeholder'=>'Enter Image Title']) !!}
            </div>

              @if(isset($gallery->image))
              <div class="form-group" id="userImageDiv">
                  <img src="{{ asset(imagePath($gallery->image, 'gallery')) }}" class="img img-rounded" alt="" style="width: 420px;height:200px">
              </div>
              @endif
                <div class="form-group">
                    <img id="userImageShow" class="img img-rounded" src="#" alt="" style="" />
                </div>

                {!! Form::label('image', 'Gallery Image :', ['class' => 'font-weight-bold']) !!}
                <div class="custom-file mb-2">
                    <input type="file" name="image" class="custom-file-input" id="userImage">
                    <label class="custom-file-label" for="userImage">Select Gallery Image</label>
                </div>

            <div class="form-group">
                <div class="form-check">
                  @if($gallery ?? '')
                  <input class="form-check-input" type="checkbox" name="is_featured"  {{ $gallery->is_featured ? 'checked' : ''}}>
                  @else
                  <input class="form-check-input" type="checkbox" name="is_featured">
                  @endif
                  <label class="form-check-label"><b>Featured Gallery Image</b></label>
                </div>
            </div>

            <div class="row col-md-12">
                @if($gallery ?? '')
                <div class="form-group float-left">
                <input type="submit" class="btn btn-primary btn-sm" value="Update Image">
                </div>
                @else
                <div class="form-group float-left">
                <input type="submit" class="btn btn-success btn-sm" value="Submit Image">
            </div>
                @endif
            </div>
          </div>
          {!! Form::close() !!}
        </div>

    </section>

@endsection

@section('footerelements')

<script>
    userImage.onchange = evt => {
        const [file] = userImage.files
        if (file) {
            userImageShow.src = URL.createObjectURL(file)
            $('#userImageShow').css({
                "height": "200px"
                , "width": "420px"
            })
            $('#userImageDiv').remove();
        }
    }

</script>
@endsection



