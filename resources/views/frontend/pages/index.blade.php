@extends('frontend.layouts.base')

@section('main-content')

<!-- ======= Hero Section ======= -->
<section id="hero">
<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

    @foreach($slider_images as $slider)
        <div class="carousel-item active" style="background-image: url({{ asset(imagePath($slider->slider_image, 'sliders')) }})">
            <div class="carousel-container">
            <div class="container">
                <h2 class="animate__animated animate__fadeInDown">{{ $slider->slider_title }}</h2>
                <p class="animate__animated animate__fadeInUp">{!! Str::limit($slider->slider_description, 80) !!}</p>
                <a href="{{ route('about') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
            </div>
        </div>
    @endforeach
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

</div>
</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

    <div class="row content">
        <p>
            {!! Str::limit($about->site_description, 1500) !!}
        </p>
    </div>
    <a href="{{ route('about') }}" class="btn btn-danger btn-get-started animate__animated animate__fadeInUp scrollto mt-3">Read More</a>
    </div>
</section><!-- End About Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
    <div class="container">

    <div class="row">
        @foreach($clients as $client)
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset(imagePath($client->client_logo, 'clients')) }}" class="img-fluid" alt="">
        </div>
        @endforeach
    </div>

    </div>
</section><!-- End Clients Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services mt-4">
    <div class="container">
    <h3 class="text-center mb-2 pb-2">Our Services</h3>
    <div class="row">
        @foreach($services as $service)
        <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
                <h4><a href="{{ route('services.show', $service) }}">{!! Str::limit($service->service_name, 50) !!}</a></h4>
                <p>{!! Str::limit($service->service_description, 300) !!}
                    <br/><br/>
                    <a href="{{ route('services.show', $service) }}" class="btn btn-primary btn-sm  animate__animated animate__fadeInUp scrollto">Read more</a>
                </p>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section><!-- End Services Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">
    <h3 class="text-center mb-2 pb-2">Latest Announcements</h3>
    <div class="row">
        @foreach($announcements as $announcement)
        <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
                <h4><a href="{{ route('announcements.show', $announcement) }}">{!! Str::limit($announcement->title, 50) !!}</a></h4>
                <p>{!! Str::limit($announcement->description, 300) !!}
                    <br/><br/>
                    <a href="{{ route('announcements.show', $announcement) }}" class="btn btn-danger btn-sm  animate__animated animate__fadeInUp scrollto">Read more</a>
                </p>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section><!-- End Services Section -->

</main><!-- End #main -->

@endsection

@section('meta_elements')
    @include('frontend.partials._meta', [
        'title' => $about->meta_title,
        'description' => $about->meta_description,
        'tags' => $about->meta_tags,
        'author' => $about->site_name,
    ])
@endsection
