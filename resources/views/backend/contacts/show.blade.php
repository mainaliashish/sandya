@extends('backend.layouts.app')
@section('main-content')
<br />
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card" style="background: lavender">
        <div class="card-header">
            <h3 class="card-title user-block text-bold">Contact Information</h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="post">
                        <div class="user-block text-bold">
                            Country :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->country }}
                        </span>
                    </div>
                    <div class="post">
                        <div class="user-block text-bold">
                            Address :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->address }}
                        </span>
                    </div>
                    <div class="post">
                        <div class="user-block text-bold">
                            Address One :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->address_one }}
                        </span>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold">
                            Phone One :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->phone_number_one }}
                        </span>
                    </div>
                    <div class="post">
                        <div class="user-block text-bold">
                            Phone Two :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->phone_number_two }}
                        </span>
                    </div>
                    <div class="post">
                        <div class="user-block text-bold">
                            Phone Three :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->phone_number_three }}
                        </span>
                    </div>
                    <div class="post">
                        <div class="user-block text-bold">
                            Phone Four :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->phone_number_four }}
                        </span>
                    </div>

                    <div class="post">
                        <div class="user-block text-bold">
                            Email One :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->email_one }}
                        </span>
                    </div>
                    <div class="post">
                        <div class="user-block text-bold">
                            Email Two :
                        </div>
                        <span style="font-size:18px;">
                            {{ $contact->email_two }}
                        </span>
                    </div>




                   
                    <div class="post float-end">
                        <div class="row">
                            <a class="btn btn-warning btn-sm col-md-1 col-sm-2 ml-1 mr-1" style="color: white" href="{{ route('backend.contacts') }}">
                                <i class="fas fa-undo-alt" style="color: white"></i>
                                Back
                            </a>
                            <a class="btn btn-info btn-sm col-md-1 col-sm-2 ml-2" href="{{ route('backend.contacts.edit', $contact) }}">
                                <i class="fa fa-pencil-alt">
                                </i>
                                Edit
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

