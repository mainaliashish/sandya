@extends('backend.layouts.app')

{{-- {{ dd($message) }} --}}
@section('main-content')
  <!-- Content Wrapper. Contains page content -->
@include('backend.partials._content-header', ['header_title' => 'Messages'])

  <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Message Detail</h3>
        </div>
        <div class="card-body">
          <div class="row">
                <div class="col-12">
                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Sender Name :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $message->name }}
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Sender Mobile Number :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $message->phone }}
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Sender Email :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $message->email }}
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Message Description :
                      </div>
                    <div class="post clearfix">
                      <p style="font-size: 17px;">
                        {{ $message->message }}
                      </p>
                    </div>

                    
                    <div class="post float-end">
                        <div class="row">
                        <a class="btn btn-warning col-md-2 col-sm-2 btn-sm ml-1 mr-1" style="color: white" href="{{ route('backend.messages') }}">
                              <i class="fas fa-undo-alt" style="color: white"></i>
                              Back
                          </a>
                          <a class="btn btn-danger btn-sm col-md-2 col-sm-2 ml-2" href="{{ route('backend.messages.destroy', $message->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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


@section('headerElements')
<style>
    .post {
        border-bottom: 1px solid coral;
        color: black;
        margin-bottom: 10px;
        padding-bottom: 10px;
    }

    .user-block.text-bold {
        font-size: 20px !important;
        color: indigo;
        text-shadow: 1px 1px lime;
        font-family: serif;
        font-style: italic;
    }

</style>
@endsection
