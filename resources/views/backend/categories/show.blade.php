@extends('backend.layouts.app')

@section('main-content')
<br />
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category : {{ $category->name }}</h3>
        </div>
        @if(isset($blogs) && $blogs->count() > 0)
        @foreach($blogs as $blog)
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="post">
                        <div class="user-block text-bold" style="font-size: 17px;">
                            Title :
                        </div>
                        <p style="font-size: 17px;">
                            {{ $blog->title }}
                        </p>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold" style="font-size: 17px;">
                            Blog Image :
                        </div>
                        <div class="post clearfix">
                            <div class="image">
                                <img class="img-rounded" src="{{ asset(imagePath($blog->image, 'blogs')) }}" alt="news Image" style="height:150px;width:auto;">
                            </div>
                        </div>

                        <div class="post">
                            <div class="user-block text-bold" style="font-size: 17px;">
                                Blog Description :
                            </div>

                            <p style="font-size: 19px;">
                                {!! $blog->content !!}
                            </p>

                            @if($blog->is_featured OR $blog->is_trending)
                            <div class="post">
                                <p>
                                    @if($blog->is_featured)
                                    <button type="button" class="btn btn-primary btn-sm">{{ $blog->is_featured ? 'Featured blog' : '' }}</button>
                                    @endif
                                    @if($blog->is_trending)
                                    <button type="button" class="btn btn-danger btn-sm">{{ $blog->is_trending ? 'Trending blog' : '' }}</button>
                                    @endif
                                </p>
                            </div>
                            @endif
                        </div>

                        <div class="post float-end">
                            <div class="row">
                                <a class="btn btn-warning col-md-1 col-sm-12 btn-sm ml-1 mr-1" style="color: white" href="{{ route('backend.categories') }}">
                                    <i class="fas fa-undo-alt" style="color: white"></i>
                                    Back
                                </a>
                                <a class="btn btn-info btn-sm col-md-1 col-sm-12 ml-2" href="{{ route('backend.categories.edit', $category) }}">
                                    <i class="fa fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm col-md-1 col-sm-12 ml-2" href="{{ route('backend.categories.trash', $category) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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
        @endforeach
        @else
        <div class="container">
          <ul class="list-group pt-2">
              <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  You do not have any blogs in this category.
              </div>
          </ul>
            <a class="btn btn-primary btn-sm mb-2" href="{{ route('backend.categories') }}">
                <i class="fas fa-undo-alt" style="color: white"></i>
                Back
            </a>
        </div>

        @endif
        <!-- /.card-body -->
    </div>
    {{ $blogs->links() }}
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


