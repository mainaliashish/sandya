@extends('frontend.layouts.base')

@section('main-content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Description</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('blogs') }}">Blogs</a></li>
            <li>Blog</li>
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
                <img src="{{ asset(imagePath($blog->image, 'blogs')) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">{{ $blog->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#">{{ $blog->created_at['month'] }} {{ $blog->created_at['day'] }}, {{ $blog->created_at['year'] }}</a></li>
                </ul>
              </div>

              <div class="entry-content">
                   {{ $blog->content }}
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">{{ $blog->category->name }}</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Categories</h3>
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
