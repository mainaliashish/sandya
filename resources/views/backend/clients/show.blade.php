@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Clients'])

  <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Client Image</h3>
        </div>
        <div class="card-body">
          <div class="row">
                <div class="col-12">
                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                         Client Title :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $client->client_title }}
                      </p>
                    </div>
                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Client Logo Image :
                      </div>
                    <div class="post clearfix">
                      <div class="image">
                        <img class="img-rounded" src="{{ asset(imagePath($client->client_logo, 'clients')) }}" alt="project Image" style="height:350px;width:auto;">
                    </div>
                    </div>
                    </div>

                  <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Client Description :
                      </div>
                      <p style="font-size: 17px;">
                        {!! $client->client_description !!}
                      </p>
                    </div>
                    <div class="post float-end">
                        <div class="row">
                        <a class="btn btn-warning col-md-2 col-sm-2 btn-md ml-1 mr-1" style="color: white" href="{{ route('backend.clients') }}">
                              <i class="fas fa-undo-alt" style="color: white"></i>
                              Back
                          </a>
                          <a class="btn btn-info btn-md col-md-2 col-sm-2 ml-2" href="{{ route('backend.clients.edit', $client) }}">
                              <i class="fa fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-md col-md-2 col-sm-2 ml-2" href="{{ route('backend.clients.destroy', $client->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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
