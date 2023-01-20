@extends('backend.layouts.app')
@section('main-content')
<br />
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card" style="background: lavender">
        <div class="card-header">
            <h3 class="card-title user-block text-bold">Announcement Detail</h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="post">
                        <div class="user-block text-bold">
                            Announcement Title :
                        </div>
                        <span style="font-size:18px;">
                            {{ $announcement->title }}
                        </span>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold">
                            Announcement Image :
                        </div>
                        <div class="post clearfix">
                            <div class="image">
                                <img class="img-rounded" src="{{ asset(imagePath($announcement->image, 'announcements')) }}" alt="news Image" style="height:350px;width:auto;">
                            </div>
                        </div>

                        <div class="post">
                            <div class="user-block text-bold">
                                Announcement Description :
                            </div>
                            <span style="font-size:18px;">
                                {!! $announcement->description !!}
                            </span>
                        </div>

                        @if($announcement->is_featured)
                        <div class="post">
                            @if($announcement->is_featured)
                            <button type="button" class="btn btn-sm btn-primary">{{ $announcement->is_featured ? 'Featured announcement' : '' }}</button>
                            @endif
                        </div>
                        @endif    
                    </div>

                    <div class="post float-end">
                        <div class="row">
                            <a class="btn btn-warning btn-sm col-md-1 col-sm-2 ml-1 mr-1" style="color: white" href="{{ route('backend.announcements') }}">
                                <i class="fas fa-undo-alt" style="color: white"></i>
                                Back
                            </a>
                            <a class="btn btn-info btn-sm col-md-1 col-sm-2 ml-2" href="{{ route('backend.announcements.edit', $announcement) }}">
                                <i class="fa fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm col-md-1 col-sm-2 ml-2" href="{{ route('backend.announcements.delete', $announcement) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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
