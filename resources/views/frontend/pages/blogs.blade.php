@extends('frontend.layouts.base')

@section('main-content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8 entries">
            @if($blogs->count() > 0)
            @foreach($blogs as $blog)
                <article class="entry">

                <div class="entry-img">
                    <img src="{{ asset(imagePath($blog->image, 'blogs')) }}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                    <a href="{{ route('blogs.show', $blog) }}">{!! Str::limit($blog->title, 70) !!}</a>
                </h2>

                <div class="entry-meta">
                    <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('blogs.show', $blog) }}">{{ 'Admin' }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('blogs.show', $blog) }}">{{ $blog->created_at['month'] }} {{ $blog->created_at['day'] }}, {{ $blog->created_at['year'] }}</a></li>
                    </ul>
                </div>

                <div class="entry-content">
                    <p>
                        {!! Str::limit($blog->content, 400) !!}
                    </p>
                    <div class="read-more">
                    <a href="{{ route('blogs.show', $blog) }}">Read More</a>
                    </div>
                </div>

                </article><!-- End blog entry -->
                @endforeach
            @else
                <p class="alert alert-danger col-sm-12 col-md-12">No blogs found.</p>
            @endif
            <div class="blog-pagination">
              <ul class="justify-content-center">
                {{ $blogs->links() }}
              </ul>
            </div>

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
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

@endsection
