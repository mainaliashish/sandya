@extends('backend.layouts.app')
{{-- {{ dd($messages) }} --}}
@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Messages'])
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Messages</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped messages">
              <thead>
                  <tr>
                      <th style="width: 25%">
                          Name
                      </th>
                      <th>
                          Phone Number
                      </th>
                      <th style="width:35%" class="text-center">
                         Message
                      </th>
                      <th style="width:25%" class="text-center">
                          Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($messages as $message)
                  <tr>
                      <td>
                          {{ $message->name }}
                      </td>
                      <td>
                          {{ $message->phone }}
                      </td>
                      <td class="message_progress text-center">
                          {!! Str::limit($message->message, 100, $end="......") !!}
                      </td>
                      <td class="message-actions text-center">
                          <a class="btn btn-primary btn-sm" href="{{ route('backend.messages.show', $message->id) }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('backend.messages.destroy', $message->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                              <i class="fas fa-trash">
                              </i>
                              Delete
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
           {{ $messages->links() }}
         </div>
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
@endsection