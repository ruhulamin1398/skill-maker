@extends('includes.app')

@section('css')
<style>
  /* #hero{
    background: url("{{asset('images/website-Slider-Cover.jpg')}}") center center ;
  } */
  .allService a{
        border-radius: 50px;
        border: 2px solid #ebe3dc;
        color: #fff;
        text-transform: uppercase;
        padding: 10px 30px;
        font-weight: 600;
        background: #337ab7;
        font-size: 16px;
        margin-top: 30px;
        display: inline-block
    }
    .allService a:hover{
        background-color: #ff9c49;
        color: #fff;
        border-color: #ff9c49;
    }
  }
</style>
@endsection

@section('hero')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <!-- <h1>Welcome to Medilab</h1> -->
    <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
    <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
  </div>
</section><!-- End Hero -->
@endsection

@section('content')

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
          <h3>Why Choose US ?</h3>
          <p>
            Imagine you don’t need a degree, you don’t need an office, you don’t need a team, you don’t need prior experience and yet you can learn, earn, achieve and accomplish far beyond your hopes and expectations. If that’s what you aim for, you have come to the right place – Enablers.
          </p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-receipt"></i>
                <h4>AMZ Sellers</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Seller Deshboard</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-images"></i>
                <h4>Investment Group</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Values Section ======= -->
<section id="values" class="values2">

  <div class="container" data-aos="fade-up">

    <header class="section-header2">
      <!-- <h2>Our Values</h2> -->
      <p class="section--header">HERE IS WHAT WE OFFER</p>
    </header>

    <div class="row">

      @foreach ($service as $service)
        <div class="col-lg-4 mb-3">
            <div class="box" data-aos="fade-up" data-aos-delay="200" style="background: #258cf5;">
            <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-1.png" class="img-fluid" alt="">
            <h3>{{ $service -> title }}</h3>
            <p>
                @php
                 echo (implode(' ', array_slice(explode(' ', strip_tags($service->description)), 0, 13))."\n");
                @endphp
            </p>

            <div class="text-center">
                <a href="{{ url('single-services/'. $service -> id) }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
            </div>
        </div>
      @endforeach

    </div>

    <div class="row">
        <div class="col">
            <div class="allService text-center">
                <a href="{{ route('services') }}">ALl Service</a>
            </div>
        </div>
    </div>

  </div>

</section><!-- End Values Section -->








<section style="background: url('https://www.enablers.org/wp-content/uploads/2020/02/enablers-amazon-seller-dashboard.jpg?id=14547)');">
  <div class="spacer"> </div>
  <div class="spacer"> </div>
  <div class="container ">
    <div class="clearfix">
      <p style="text-align: center;"><strong><span style="color: #fff; font-size: 22px; text-align: justify; line-height: 31px;">Are you ready for this offer </span></strong></p>
      <h2 style="line-height: 42px; margin: 0px; padding: 0px; font-size: 35px; text-align: center; font-weight: 900; color: #fff;"><strong>ENABLERS SELLERS DASHBOARD </strong></h2>
      <p style="text-align: center; margin-top: 30px;">

      <div class="text-center">
        <a href="#" class="more-btn">Start Now <i class="bx bx-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <div class="spacer"> </div>
  <div class="spacer"> </div>
</section>




<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">
    <header class="section-header2">
      <!-- <h2>Our Values</h2> -->
      <p>WE PARTNER, CREATE AND ENABLE
        BRANDS TO GROW</p>
    </header>
    <div class="owl-carousel testimonials-carousel">

      <div class="testimonial-wrap">
        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

      <div class="testimonial-wrap">
        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

      <div class="testimonial-wrap">
        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

      <div class="testimonial-wrap">
        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Matt Brandon</h3>
          <h4>Freelancer</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

      <div class="testimonial-wrap">
        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>John Larson</h3>
          <h4>Entrepreneur</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Testimonials Section -->






<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container ">

    <div class="row p-2">


      <div class="col-xl-7 col-lg-6 icon-boxes p-4    ">
        <h3>UPCOMING SEMINAR SCHEDULE</h3>
        <p>All seminars will be scheduled as per government regulations. Keep visiting the site for the latest updates.</p>

        @foreach ($seminar as $seminar)
            <div class="icon-box">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">{{ $seminar -> location }}</a></h4>
                <h4 class=" " style="margin-left: 85px !important;" >{{ date('F, d Y', strtotime($seminar -> date)) }}</h4>
                <div class="" style="margin-left: 85px !important;">{{ $seminar -> venue }}</div>
          </div>
        @endforeach

      </div>


      <div class="col-xl-5 col-lg-6  p-4">
      <img class="img-responsive" src="https://www.enablers.org/wp-content/uploads/2020/02/enablers-amazon-fba-training-saqib-azhar.jpg">
    </div>


    </div>

  </div>
</section><!-- End About Section -->















@endsection
