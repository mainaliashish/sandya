@extends('backend.layouts.app')
{{-- {{ dd($teams) }} --}}
@section('headerelements')
@endsection

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'All Teams'])



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Teams</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 12%">
                          Team Name
                      </th>
                      <th style="width: 20%" class="text-center">
                          Team Image
                      </th>
                      <th style="width:12%" class="text-center">
                         Address
                      </th>
                      <th style="width:12%" class="text-center">
                         Contact
                      </th>
                      <th class="text-center">
                          Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($teams as $team)
                  <tr>
                      <td>
                          {{ $team->name }}
                      </td>
                      <td>
                        <img alt="Avatar" class="img img-rounded" width="100%" height="120px" src="{{ asset(imagePath($team->image, 'teams')) }}">     
                      </td>
                     <td class="project_progress text-center">
                          {!! $team->address !!}
                      </td>
                      <td class="project_progress text-center">
                          {!! $team->contact !!}
                      </td>
                      <td class="project-actions text-center">
                          <a class="btn btn-primary btn-sm" href="{{ route('backend.teams.show', $team->id) }}">
                              <i class="fas fa-eye">
                              </i>
                             
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('backend.teams.edit', $team->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                             
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('backend.teams.destroy', $team->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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
  
    </section>
  <!-- /.content-wrapper -->
@endsection