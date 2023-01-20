@extends('backend.layouts.app')
{{-- {{ dd($services) }} --}}
@section('headerelements')
@endsection

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Services'])


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Services</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 12%">
                          Name
                      </th>
                      <th style="width: 20%" class="text-center">
                          Service Image
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
                @foreach ($services as $service)
                  <tr>
                      <td>
                          {{ $service->service_name }}
                      </td>
                      <td>
                        <img alt="Avatar" class="img img-rounded" width="100%" height="120px" src="{{ asset(imagePath($service->service_image, 'services')) }}">     
                      </td>
                      <td class="project_progress">
                          {!! Str::limit($service->service_description, 100, $end="......") !!}
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{ route('backend.services.show', $service) }}">
                              <i class="fas fa-eye">
                              </i>
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('backend.services.edit', $service) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('backend.services.destroy', $service) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>     
        </div>

          
        <!-- /.card-body -->
      </div>
     <div class="card-footer clearfix">
          {{ $services->links() }}  
      </div>
  
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
@endsection