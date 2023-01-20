@extends('backend.layouts.app')

{{-- {{ dd($team) }} --}}
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Team Information'])

  <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Team Detail</h3>
        </div>
        <div class="card-body">
          <div class="row">
                <div class="col-12">
                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Team Member Name :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $team->name }}
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Team Member Address :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $team->address }}
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Team Member Contact :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $team->contact }}
                      </p>
                    </div>

                 <div class="post">
                     <div class="user-block text-bold" style="font-size: 17px;">
                         Team Member Email :
                     </div>
                     <p style="font-size: 17px;">
                         {{ $team->email }}
                     </p>
                 </div>
                <div class="post">
                    <div class="user-block text-bold" style="font-size: 17px;">
                        Team Member Facebook :
                    </div>
                    <p style="font-size: 17px;">
                        {{ $team->facebook }}
                    </p>
                </div>
                 <div class="post">
                     <div class="user-block text-bold" style="font-size: 17px;">
                         Team Member Twitter :
                     </div>
                     <p style="font-size: 17px;">
                         {{ $team->twitter }}
                     </p>
                 </div>
                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Team Profile Image :
                      </div>
                    <div class="post clearfix">
                      <div class="image">
                        <img class="img-rounded" src="{{ asset(imagePath($team->image, 'teams')) }}" alt="team Image" style="height:350px;width:auto;">
                    </div>
                    </div>

                    
                    <div class="post float-end">
                        <div class="row">
                        <a class="btn btn-warning col-sm-2 btn-sm ml-1 mr-1" style="color: white" href="{{ route('backend.teams') }}">
                              <i class="fas fa-undo-alt" style="color: white"></i>
                              Back
                          </a>
                          <a class="btn btn-info btn-sm col-sm-2 ml-2" href="{{ route('backend.teams.edit', $team) }}">
                              <i class="fa fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm col-sm-2 ml-2" href="{{ route('backend.teams.destroy', $team->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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

