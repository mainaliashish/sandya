@extends('backend.layouts.app')

@section('main-content')
@include('backend.partials._content-header', ['header_title' => 'Trashed blogs'])
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Blogs</h3>
            @if(isset($blogs) && count($blogs) > 0)
            <a href="{{ route('backend.blogs.delete-all') }}" class="btn btn-danger btn-sm ml-3">Delete All Blogs</a>
            <a href="{{ route('backend.blogs.restore-all') }}" class="btn btn-warning btn-sm ml-3">Restore All Blogs</a>
            @endif
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
            @if(isset($blogs) && count($blogs) > 0)
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 20%">
                            Blog title
                        </th>
                        <th class="text-center" style="width: 15%">
                            Image
                        </th>
                        <th style="width: 11%">
                            Category
                        </th>
                        <th class="text-center">
                            Description
                        </th>
                        <th class="text-center">
                            Actions
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>
                            {{ Str::limit($blog->title, 46, '....') }}
                        </td>
                        <td>
                            <img alt="Avatar" class="img img-rounded" width="100%" height="120px" src="{{ asset(imagePath($blog->image, 'blogs')) }}">
                        </td>
                        <td class="text-center">
                            {{ $blog->category->name ?? 'Deleted' }}
                        </td>
                        <td>
                            {!! Str::limit($blog->content, 46, '....') !!}
                        </td>

                        <td class="project-actions">

                            <a class="btn btn-primary btn-sm" href="{{ route('backend.blogs.restore', $blog) }}">
                                <i class="fas fa-trash-restore-alt"></i>
                                Restore
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('backend.blogs.delete', $blog) }}" onclick="return confirm('Are you sure you want to delete this item forever?');">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @else
                <div class="container">
                    <ul class="list-group">
                        <div class="alert alert-danger mt-2">
                            You do not have any trash blogs yet.
                        </div>
                    </ul>
                    <a class="btn btn-success btn-sm mb-2" href="{{ route('backend.blogs') }}">All Blogs</a>
                    <a class="btn btn-primary btn-sm mb-2" href="{{ route('backend.dashboard') }}">
                        <i class="fas fa-undo-alt" style="color: white"></i>
                        Back
                    </a>
                </div>

                @endif

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection

