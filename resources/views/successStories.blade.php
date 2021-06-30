@extends('includes.app')

@section('css')
<style>
  #hero {
    background: url("https://enablers.org/wp-content/uploads/2020/01/services-1.jpg") center center;



  }
  .icon{
    display: none  !important;
  }
</style>
@endsection

@section('hero')
{{---
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <!-- <h1>Welcome to Medilab</h1> -->
    <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
    <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
  </div>
</section><!-- End Hero -->

--}}
<section id="pageHero" class="successHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
              <h1>LEADING ECOMMERCE & DIGITAL <br> MARKETING AGENCY</h1>
          </div>
      </div>
    </div>
</section>
@endsection

@section('content')

{{-- <header class="section-header2">
      <!-- <h2>Our Values</h2> -->
      <p class="section--header"> &nbsp; </p>
    </header> --}}



    <!-- ======= Team Section ======= -->
    <section id="doctors" class="doctors2">
      <div class="container" data-aos="fade-up">

        <div>
          <h2>LISTEN FROM , WHO NEVER GAVE UP</h2>
        </div>

        <div class="row">

            @foreach ($stories as $story)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="{{asset('success_story/images/'. $story -> image)}}" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4>{{ $story -> name }}</h4>
                    <strong>{{ $story -> location }}</strong>
                    <span>
                        @php
                        echo (implode(' ', array_slice(explode(' ', strip_tags($story -> long_description)), 0, 13))."\n");
                        @endphp
                    </span>
                    <a href="">Read More</a>
                  </div>
                </div>
              </div>
            @endforeach

        </div>

      </div>
    </section><!-- End Team Section -->


@endsection
