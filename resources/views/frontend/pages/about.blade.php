@extends('frontend.layouts.base')

@section('main-content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-12">
            <h4 class="mt-0">About Us</h4>
            {!! $about->site_description !!}
          </div>
          <div class="col-lg-12 mt-5">
            <hr/>
            <h4 class="mt-0">Why choose us?</h4>
            {!! $about->site_why_us !!}
          </div>
          <div class="col-lg-12 mt-5">
            <hr/>
            <h4 class="mt-0">Our mission</h4>
            {!! $about->site_mission !!}
          </div>
          <div class="col-lg-12 mt-5">
            <hr/>
            <h4 class="mt-0">Our vision</h4>
            {!! $about->site_vision !!}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Our Teams</p>
        </div>

        <div class="row">

          @foreach($teams as $team)
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset(imagePath($team->image, 'teams')) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $team->name }}</h4>
                <p>{{ $team->email }}</p>
                <p>{{ $team->contact }}</p>
                <div class="social">
                  <a href="{{ $team->twitter }}"><i class="ri-twitter-fill"></i></a>
                  <a href="{{ $team->facebook }}"><i class="ri-facebook-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Information</h2>
          <p>Contact details</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6 p-3">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>List of Phone numbers</h4>
                <ul>
                    <li><h5><a href="tel:{{ $about->contact_number_one | '' }}">{{ $about->contact_number_one | '' }}</a></h5></li>
                    <li><h5><a href="tel:{{ $about->contact_number_two | '' }}">{{ $about->contact_number_two | '' }}</a></h5></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6 p-3">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Email addresses</h4>
                <ul>
                    <li><h5><a href="mailto:{{ $about->email_one | '' }}">{{ $about->email_one | '' }}</a></h5></li>
                    <li><h5><a href="mailto: {{ $about->email_two | '' }}">{{ $about->email_two | '' }}</a></h5></li>
                </ul>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

  </main><!-- End #main -->

@endsection


@section('meta_elements')
    @include('frontend.partials._meta', [
        'title' => $about->meta_title,
        'tags' => $about->meta_tags,
        'description' => $about->meta_description
    ])
@endsection
