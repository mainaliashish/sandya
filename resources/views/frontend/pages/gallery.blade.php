@extends('frontend.layouts.base')

@section('main-content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row portfolio-container">
          @foreach($g_images as $image)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset(imagePath($image->image,'gallery')) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $image->title }}</h4>
                <div class="portfolio-links">
                  <a href="{{ asset(imagePath($image->image,'gallery')) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $image->title }}"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->

@endsection
