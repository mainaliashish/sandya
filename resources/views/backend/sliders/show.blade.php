@extends('backend.layouts.app')

{{-- {{ dd($service) }} --}}
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Sliders'])


  <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Slider Image</h3>
        </div>
        <div class="card-body">
          <div class="row">
                <div class="col-12">
                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                         Slider Title :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $slider->slider_title }}
                      </p>
                    </div>
                    <div class="post">
                        <div class="user-block text-bold" style="font-size: 17px;">
                            Slider Motto :
                        </div>
                        <p style="font-size: 17px;">
                            {{ $slider->slider_motto }}
                        </p>
                    </div>
                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Slider Image :
                      </div>
                    <div class="post clearfix">
                      <div class="image">
                        <img class="img-rounded" src="{{ asset(imagePath($slider->slider_image, 'sliders')) }}" alt="project Image" style="height:350px;width:auto;">
                    </div>
                    </div>
                    </div>

                  <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Slider Description :
                      </div>
                      <p style="font-size: 17px;">
                        {!! $slider->slider_description !!}
                      </p>
                    </div>
                    <div class="post float-end">
                        <div class="row">
                        <a class="btn btn-warning col-md-2 col-sm-2 btn-md ml-1 mr-1" style="color: white" href="{{ route('backend.sliders') }}">
                              <i class="fas fa-undo-alt" style="color: white"></i>
                              Back
                          </a>
                          <a class="btn btn-info btn-md col-md-2 col-sm-2 ml-2" href="{{ route('backend.sliders.edit', $slider) }}">
                              <i class="fa fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-md col-md-2 col-sm-2 ml-2" href="{{ route('backend.sliders.destroy', $slider->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                          </div>
                      </div>
                      </div>
                  
                </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
  </div>
    <!-- /.content -->
@endsection