@extends('frontend.layouts.base')

@section('main-content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $about->address }}</p>
                <p>{{ $about->address_one }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>
                {{ $about->email_one }}
                <a href="mailto:{{ $about->email_one }}">Send Email</a>
                </p>
                <p></p>
                <p>
                {{ $about->email_two }}
                <a href="mailto:{{ $about->email_one }}">Send Email</a>
                </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $about->contact_number_one }}</p>
                <p>{{ $about->contact_number_two }}</p>
                <p>{{ $about->contact_number_three }}</p>
              </div>
              <div class="social-icons">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="form-group">
                <b><span class="text-success" id="success-message"> </span><b>
            </div>
            <form action="#" method="POST" id="contact-form" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="Your Name" required>
                  <span class="text-danger" id="name-error"></span>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  <span class="text-danger" id="email-error"></span>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number" required>
                <span class="text-danger" id="phone-error"></span>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
                <span class="text-danger" id="message-error"></span>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
               <input name="submit" type="submit" id="submit" class="submit text-center btn btn-danger ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" value="Send Message">
               <i class="loading-spinner fa fa-lg fas fas-spinner fa-spin"></i>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection

@section('headerElements')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('footerElements')
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#contact-form').on('submit', function(event){
        event.preventDefault();
        $('.loading-spinner').toggleClass('active');

        $('#name-error').text('');
        $('#email-error').text('');
        $('#phone').text('');
        $('#message-error').text('');

        fname = $('#fname').val();
        email = $('#email').val();
        phone = $('#phone').val();
        message = $('#message').val();

        $.ajax({
          url: "{{ route('contact.form') }}",
          type: "POST",
          data:{
              fname:fname,
              email:email,
              phone:phone,
              message:message,
          },
          success:function(response){
            console.log(response);
            if (response) {
              $('#success-message').text(response.success).fadeOut(6000);
              $("#contact-form")[0].reset();
            }
          },
          error: function(response) {
              $('#name-error').text(response.responseJSON.errors.fname).fadeOut(4200);
              $('#email-error').text(response.responseJSON.errors.email).fadeOut(4200);
              $('#phone-error').text(response.responseJSON.errors.phone).fadeOut(4200);
              $('#message-error').text(response.responseJSON.errors.message).fadeOut(4200);
          }
         });
        });
    </script>
@endsection
