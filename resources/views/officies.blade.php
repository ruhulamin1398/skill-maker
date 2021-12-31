@extends('includes.app')

@section('css')
<style> 
 #pageHero {
    background: url("{{ asset(App\Models\additionalImage::find(3)->link )}}") center center;
    background-repeat: no-repeat;
    background-size:  100% auto;
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
<section id="pageHero" class="officesHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
              <h1> &nbsp;&nbsp;</h1>
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
<!-- ======= Seminar table ======= -->

 <!-- ======= Team Section ======= -->
 <section id="doctors" class="enablerOffice">
      <div class="container" data-aos="fade-up">

        <div>
          <h2>OUR OFFICES</h2>
        </div>

        <div class="row">

            @foreach ($office as $office)
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{asset('images/enablers-lahore-office.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{ $office -> country }}</h4>
                            <h5>HEAD OFFICE (LHR)</h5>
                            <p>{{ $office -> location }}</p>
                            <a href="">View On More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

      </div>
    </section><!-- End Our Offices -->

@endsection
