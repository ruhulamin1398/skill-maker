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
<section id="pageHero" class="trainingHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
              <h1>ECOMMERCE TRAINING COURSES IN PAKISTAN</h1>
          </div>
      </div>
    </div>
</section>
@endsection

@section('content')


<section id="services" class="services">
  <div class="container">

  {{-- <header class="section-header2">
      <!-- <h2>Our Values</h2> -->
      <p class="section--header"> &nbsp; </p>
    </header> --}}

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="icofont-heart-beat"></i></div>
          <h4><a href="">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          <button type="button" class="btn btn-primary">Join</button>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="icofont-drug"></i></div>
          <h4><a href="">Sed ut perspiciatis</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          <button type="button" class="btn btn-primary">Join</button>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="icofont-dna-alt-2"></i></div>
          <h4><a href="">Magni Dolores</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          <button type="button" class="btn btn-primary">Join</button>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="icofont-heartbeat"></i></div>
          <h4><a href="">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          <button type="button" class="btn btn-primary">Join</button>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="icofont-disabled"></i></div>
          <h4><a href="">Dele cardo</a></h4>
          <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          <button type="button" class="btn btn-primary">Join</button>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="icofont-autism"></i></div>
          <h4><a href="">Divera don</a></h4>
          <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          <button type="button" class="btn btn-primary">Join</button>
        </div>
      </div>

    </div>

  </div>
</section>






@endsection
