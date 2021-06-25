@extends('includes.app')

@section('css')
<style>
  #hero {
    background: url("https://enablers.org/wp-content/uploads/2020/01/services-1.jpg") center center;
  }
</style>
@endsection

@section('hero')
-
<!-- ======= Hero Section ======= -->
{{-- <section id="hero" class="d-flex align-items-center">
  <div class="container">
    <h1>Welcome to Medilab</h1>
    <h2>We are team of talented designers making websites with Bootstrap</h2>
    <a href="#about" class="btn-get-started scrollto">Get Started</a>
  </div>
</section> --}}
<section id="pageHero" class="servicesHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
              <h1>LEADING ECOMMERCE & DIGITAL <br> MARKETING AGENCY</h1>
          </div>
      </div>
    </div>
</section>
<!-- End Hero -->


@endsection

@section('content')




<!-- ======= Values Section ======= -->
<section id="values" class="values2">

  <div class="container" data-aos="fade-up">

    {{-- <header class="section-header2">
      <!-- <h2>Our Values</h2> -->
      <p class="section--header"> &nbsp; </p>
    </header> --}}

    <div class="row">

    <div class="col-lg-4 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="200" style="background: #258cf5;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-1.png" class="img-fluid" alt="">
          <h3>AMAZON ACCOUNT MANAGEMENT</h3>
          <p>Whether you’re just getting started or are an experienced seller, the Amazon…</p>


          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="400" style="    background: #8876fe;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-2.png" class="img-fluid" alt="">
          <h3>AMAZON SELLERS
            DASHBOARD</h3>
          <p>Currently, a huge problem with Pakistan is that it is not in the list…</p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="600" style="background: #31bcff;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-3.png" class="img-fluid" alt="">
          <h3>AMAZON 1:1
            COACHING</h3>
          <p>Great mentors procreate and shape brilliant students who, in the long run….</p>
          <div class="text-center">
            <a href="{{route('oneToOne')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="600" style="background: #ff9c47;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-3.png" class="img-fluid" alt="">
          <h3>AMAZON PRIVATE LABEL BOOT CAMP</h3>
          <p>Amazon is one of the largest E-Commerce stores across the globe…</p>
          <div class="text-center">
            <a href="{{route('oneToOne')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="600" style="background: #62cf62;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-3.png" class="img-fluid" alt="">
          <h3>VA
            TRAINING</h3>
          <p>This training course is designed to provide you with a road-map…</p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="600" style="    background: #31bcff;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-3.png" class="img-fluid" alt="">
          <h3>ENABLING
            VIDEO SERIES</h3>
          <p>Learn all Amazon Business Models via Enabling Video Series…</p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>




      <div class="col-lg-4 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="200" style="background: #258cf5;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-1.png" class="img-fluid" alt="">
          <h3>AMAZON ACCOUNT MANAGEMENT</h3>
          <p>Whether you’re just getting started or are an experienced seller, the Amazon…</p>


          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="400" style="    background: #8876fe;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-2.png" class="img-fluid" alt="">
          <h3>AMAZON SELLERS
            DASHBOARD</h3>
          <p>Currently, a huge problem with Pakistan is that it is not in the list…</p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="600" style="background: #31bcff;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-3.png" class="img-fluid" alt="">
          <h3>AMAZON 1:1
            COACHING</h3>
          <p>Great mentors procreate and shape brilliant students who, in the long run….</p>
          <div class="text-center">
            <a href="{{route('oneToOne')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="600" style="background: #ff9c47;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-3.png" class="img-fluid" alt="">
          <h3>AMAZON PRIVATE LABEL BOOT CAMP</h3>
          <p>Amazon is one of the largest E-Commerce stores across the globe…</p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="600" style="background: #62cf62;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-3.png" class="img-fluid" alt="">
          <h3>VA
            TRAINING</h3>
          <p>This training course is designed to provide you with a road-map…</p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0 mb-3">
        <div class="box" data-aos="fade-up" data-aos-delay="600" style="    background: #31bcff;">
          <img src="https://bootstrapmade.com/demo/templates/FlexStart/assets/img/values-3.png" class="img-fluid" alt="">
          <h3>ENABLING
            VIDEO SERIES</h3>
          <p>Learn all Amazon Business Models via Enabling Video Series…</p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>





    </div>

  </div>

</section><!-- End Values Section -->










@endsection
