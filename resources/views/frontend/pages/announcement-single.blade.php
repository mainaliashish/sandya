@extends('frontend.layouts.base')

@section('main-content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Announcement Description</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li>Announcement</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ asset(imagePath($announcement->image, 'announcements')) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">{{ $announcement->title }}</a>
              </h2>

              <div class="entry-content">
                   {{ $announcement->description }}
              </div>

            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->
          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Blog Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach($categories as $category)
                    <li><a href="{{ route('blogs.showcat', $category) }}">{{ $category->name }} <span>({{ $category->blogs->count() }})</span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

          </div><!-- End blog sidebar -->
        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
@endsection
