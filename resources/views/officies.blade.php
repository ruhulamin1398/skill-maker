@extends('includes.app')

@section('css')
<style>
    #hero {
        background: url("https://enablers.org/wp-content/uploads/2020/01/services-1.jpg") center center;



    }

    .icon {
        display: none !important;
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
@endsection

@section('content')










<header class="section-header2">
    <!-- <h2>Our Values</h2> -->
    <p class="section--header"> &nbsp; </p>
</header>
<!-- ======= Seminar table ======= -->

 <!-- ======= Team Section ======= -->
 <section id="doctors" class="enablerOffice">
      <div class="container" data-aos="fade-up">

        <div>
          <h2>OUR OFFICES</h2>
        </div>

        <div class="row">

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('images/enablers-lahore-office.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>PAKISTAN</h4>
                <h5>HEAD OFFICE (LHR)</h5>
                <p>Office# 501, Al-Hafeez Heights Gulberg, Lahore</p>
                <a href="">View On More</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('images/enablers-lahore-office.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>PAKISTAN</h4>
                <h5>HEAD OFFICE (LHR)</h5>
                <p>Office# 501, Al-Hafeez Heights Gulberg, Lahore</p>
                <a href="">View On More</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('images/enablers-lahore-office.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>PAKISTAN</h4>
                <h5>HEAD OFFICE (LHR)</h5>
                <p>Office# 501, Al-Hafeez Heights Gulberg, Lahore</p>
                <a href="">View On More</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('images/enablers-lahore-office.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>PAKISTAN</h4>
                <h5>HEAD OFFICE (LHR)</h5>
                <p>Office# 501, Al-Hafeez Heights Gulberg, Lahore</p>
                <a href="">View On More</a>
              </div>
            </div>
          </div>


          <div class="col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('images/enablers-lahore-office.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>PAKISTAN</h4>
                <h5>HEAD OFFICE (LHR)</h5>
                <p>Office# 501, Al-Hafeez Heights Gulberg, Lahore</p>
                <a href="">View On More</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('images/enablers-lahore-office.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>PAKISTAN</h4>
                <h5>HEAD OFFICE (LHR)</h5>
                <p>Office# 501, Al-Hafeez Heights Gulberg, Lahore</p>
                <a href="">View On More</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Offices -->

@endsection