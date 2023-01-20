@extends('backend.layouts.app')
@section('main-content')
<br />
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card" style="background: lavender">
        <div class="card-header">
            <h3 class="card-title user-block text-bold">Event Detail</h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="post">
                        <div class="user-block text-bold">
                            Event Title :
                        </div>
                        <span style="font-size:18px;">
                            {{ $event->title }}
                        </span>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold">
                            Event Date :
                        </div>
                        <span style="font-size:18px;">
                            {{ \Carbon\Carbon::parse($event->event_date)->toFormattedDateString() }}

                        </span>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold">
                            Event Image :
                        </div>
                        <div class="post clearfix">
                            <div class="image">
                                <img class="img-rounded" src="{{ asset(imagePath($event->image, 'events')) }}" alt="news Image" style="height:350px;width:auto;">
                            </div>
                        </div>

                        <div class="post">
                            <div class="user-block text-bold">
                                Event Description :
                            </div>
                            <span style="font-size:18px;">
                                {!! $event->description !!}
                            </span>
                        </div>

                        @if($event->is_featured)
                        <div class="post">
                            @if($event->is_featured)
                            <button type="button" class="btn btn-sm btn-primary">{{ $event->is_featured ? 'Featured event' : '' }}</button>
                            @endif
                        </div>
                        @endif
                    </div>

                    <div class="post float-end">
                        <div class="row">
                            <a class="btn btn-warning btn-sm col-md-1 col-sm-2 ml-1 mr-1" style="color: white" href="{{ route('backend.events') }}">
                                <i class="fas fa-undo-alt" style="color: white"></i>
                                Back
                            </a>
                            <a class="btn btn-info btn-sm col-md-1 col-sm-2 ml-2" href="{{ route('backend.events.edit', $event) }}">
                                <i class="fa fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm col-md-1 col-sm-2 ml-2" href="{{ route('backend.events.delete', $event) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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

