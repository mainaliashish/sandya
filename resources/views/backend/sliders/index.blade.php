@extends('backend.layouts.app')
{{-- {{ dd($sliders) }} --}}
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Slider Images'])

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="col-md-6">
                <h3 class="card-title">Slider Images</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('backend.sliders.create') }}" class="btn btn-primary float-right">
                    Add Slider Image
                </a>
            </div>

        </div>
        <div class="card-body p-0">
          <table class="table table-striped sliders">
              <thead>
                  <tr>
                      <th>
                          Title
                      </th>
                      <th style="width: 20%" class="text-center">
                          Slider Image
                      </th>
                      <th style="width:35%" class="text-center">
                         Description
                      </th>
                      <th class="text-center">
                          Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($sliders as $slider)
                  <tr>
                      <td>
                          {{ Str::limit($slider->slider_title, 40) }}

                      </td>
                      <td class="text-center">
                        <img alt="Avatar" class="img img-rounded" width="120px" height="100px" src="{{ asset(imagePath($slider->slider_image, 'sliders')) }}">
                      </td>
                      <td class="slider_progress text-center">
                          {!! Str::limit($slider->slider_description, 100, $end="......") !!}
                      </td>
                      <td class="slider-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{ route('backend.sliders.show', $slider->id) }}">
                              <i class="fas fa-eye">
                              </i>

                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('backend.sliders.edit', $slider->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>

                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('backend.sliders.destroy', $slider->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                              <i class="fas fa-trash">
                              </i>

                          </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
      <!-- /.card -->

      <div class="card-footer clearfix">
           {{ $sliders->links() }}
         </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
