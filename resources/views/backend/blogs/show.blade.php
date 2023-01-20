@extends('backend.layouts.app')
@section('main-content')
<br />
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card" style="background: lavender">
        <div class="card-header">
            <h3 class="card-title user-block text-bold">Detail About Blog</h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="post">
                        <div class="user-block text-bold">
                            Blog Title :
                        </div>
                        <span style="font-size:18px;">
                            {{ $blog->title }}
                        </span>                        
                    </div>

                    <div class="post">
                        <div class="user-block text-bold">
                            Blog Image :
                        </div>
                        <div class="post clearfix">
                            <div class="image">
                                <img class="img-rounded" src="{{ asset(imagePath($blog->image, 'blogs')) }}" alt="news Image" style="height:350px;width:auto;">
                            </div>
                        </div>

                        <div class="post">
                            <div class="user-block text-bold">
                                Blog Description :
                            </div>
                            <span style="font-size:18px;">
                                {!! $blog->content !!}
                            </span>
                        </div>

                       {{-- <div class="post">
                           <div class="user-block text-bold">
                               Blog Comments :
                           </div>         
                           <span style="font-size:18px;">
                           <a href="{{ route('backend.comments.showsingle', $blog->id) }}" class="btn btn-primary btn-sm">Show Comments <span class="badge badge-danger">{{ $blog->comments->count() }}</span> </a>
                           </span>
                       </div> --}}

                            @if($blog->is_featured OR $blog->is_trending)
                            <div class="post">
                                @if($blog->is_featured)
                                <button type="button" class="btn btn-sm btn-primary">{{ $blog->is_featured ? 'Featured blog' : '' }}</button>
                                @endif
                                @if($blog->is_trending)
                                <button type="button" class="btn btn-sm btn-danger">{{ $blog->is_trending ? 'Trending blog' : '' }}</button>
                                @endif
                            @endif
                            </div>
                        </div>

                        <div class="post float-end">
                            <div class="row">
                                <a class="btn btn-warning btn-sm col-md-1 col-sm-2 ml-1 mr-1" style="color: white" href="{{ route('backend.blogs') }}">
                                    <i class="fas fa-undo-alt" style="color: white"></i>
                                    Back
                                </a>
                                <a class="btn btn-info btn-sm col-md-1 col-sm-2 ml-2" href="{{ route('backend.blogs.edit', $blog) }}">
                                    <i class="fa fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm col-md-1 col-sm-2 ml-2" href="{{ route('backend.blogs.trash', $blog) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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