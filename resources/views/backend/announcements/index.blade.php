@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Announcement'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Announcement</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            @if(isset($announcements) && $announcements->count() > 0)
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 20%">
                            Title
                        </th>
                        <th class="text-center" style="width: 20%">
                            Image
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($announcements as $announcement)
                    <tr>
                        <td>
                            {{ Str::limit($announcement->title, 46, '....') }}
                        </td>
                        <td>
                            <img alt="Avatar" class="img img-rounded" width="100%" height="120px" src="{{ asset(imagePath($announcement->image, 'announcements')) }}">
                        </td>
                        <td>
                            {!! Str::limit($announcement->description, 46, '....') !!}
                        </td>

                        <td class="project-actions">
                            <a class="btn btn-primary btn-sm" href="{{ route('backend.announcements.show', $announcement) }}">
                                <i class="far fa-eye"></i>
                                </i>
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('backend.announcements.edit', $announcement) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('backend.announcements.delete', $announcement) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="fas fa-trash">
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="container">
                <ul class="list-group">
                    <div class="alert alert-danger mt-2">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        You do not have any announcements yet.
                    </div>
                </ul>
                <a class="btn btn-success btn-sm mb-2" href="{{ route('backend.announcements.create') }}">Create a announcement</a>
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('backend.dashboard') }}">
                    <i class="fas fa-undo-alt" style="color: white"></i>
                    Back
                </a>
            </div>
            @endif
        </div>
        <!-- /.card-body -->
    </div>
    {{ $announcements->links() }}
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection

