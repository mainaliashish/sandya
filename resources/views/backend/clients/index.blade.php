@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Client Images'])

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="col-md-6">
                <h3 class="card-title">Clients</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('backend.clients.create') }}" class="btn btn-primary float-right">
                    Add Client
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
                          Client Image
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
                @foreach ($clients as $client)
                  <tr>
                      <td>
                          {{ Str::limit($client->client_title, 40) }}

                      </td>
                      <td class="text-center">
                        <img alt="Avatar" class="img img-rounded" width="50px" height="50px" src="{{ asset(imagePath($client->client_logo, 'clients')) }}">
                      </td>
                      <td class="slider_progress text-center">
                          {!! Str::limit($client->client_description, 100, $end="......") !!}
                      </td>
                      <td class="slider-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{ route('backend.clients.show', $client->id) }}">
                              <i class="fas fa-eye">
                              </i>
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('backend.clients.edit', $client->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>

                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('backend.clients.destroy', $client->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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
           {{ $clients->links() }}
         </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
