@extends('backend.layouts.app')

{{-- {{ dd($comment) }} --}}
@section('main-content')
<!-- Content Wrapper. Contains page content -->
@include('backend.partials._content-header', ['header_title' => 'Comment'])

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Comment Detail</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="post">
                        <div class="user-block text-bold" style="font-size: 17px;">
                           Blog Title :
                        </div>
                        <p style="font-size: 17px;">
                            <a href="{{ route('backend.blogs.show', $comment->blog) }}">{{ $comment->blog->title }}</a>

                        </p>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold" style="font-size: 17px;">
                            Comment By :
                        </div>
                        <p style="font-size: 17px;">
                            {{ $comment->name }}
                        </p>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold" style="font-size: 17px;">
                            Commenter Email :
                        </div>
                        <p style="font-size: 17px;">
                            {{ $comment->email }}
                        </p>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold" style="font-size: 17px;">
                            comment Description :
                        </div>
                        <div class="post clearfix">
                            <p style="font-size: 17px;">
                                {{ $comment->comment }}
                            </p>
                        </div>


                        <div class="post float-end">
                            <div class="row">
                                <a class="btn btn-warning col-sm-2 btn-sm ml-1 mr-1" style="color: white" href="{{ route('backend.comments') }}">
                                    <i class="fas fa-undo-alt" style="color: white"></i>
                                    Back
                                </a>
                                <a class="btn btn-danger btn-sm col-sm-2 ml-2" href="{{ route('backend.comments.destroy', $comment->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                                <a href="{{ route('backend.comments.status', $comment) }}" class="{{ $comment->is_published ? 'btn btn-sm btn-success col-sm-2 ml-2' : 'btn btn-sm btn-primary col-sm-2 ml-2' }}"> 
                                {{ $comment->is_published ? 'Published' : 'Unpublished' }} 
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

