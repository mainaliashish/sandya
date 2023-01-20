@extends('frontend.layouts.base')

@section('main-content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                <h4><a href="{{ route('services.show', $service) }}">{{ $service->service_name }}</a></h4>
                <p>{!! Str::limit($service->service_description, 400) !!}</p>
                </div>
            </div>
            @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

@endsection
