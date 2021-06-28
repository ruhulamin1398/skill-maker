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
@endsection

@section('content')








 

<header class="section-header2">
      <!-- <h2>Our Values</h2> -->
      <p class="section--header"> &nbsp; </p>
    </header>
    <!-- ======= Seminar table ======= -->
 
 
    <!-- ======= Mentor section ======= -->
    <section id="mentor" class="inner-page">
      <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box text-center">
                        <div class="mentor-image">
                            <img src="{{asset('images/ava.png')}}" alt="">
                        </div>
                        <div class="mentor-content">
                            <h2>Khurram Khalid</h2>
                            <span>Amazon Mentor</span>
                        </div>
                        <div class="mentor-button text-light">
                            <a href="#">Apply Now</a>
                        </div>                   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box text-center">
                        <div class="mentor-image">
                            <img src="{{asset('images/ava.png')}}" alt="">
                        </div>
                        <div class="mentor-content">
                            <h2>Khurram Khalid</h2>
                            <span>Amazon Mentor</span>
                        </div>
                        <div class="mentor-button text-light">
                            <a href="#">Apply Now</a>
                        </div>                   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box text-center">
                        <div class="mentor-image">
                            <img src="{{asset('images/ava.png')}}" alt="">
                        </div>
                        <div class="mentor-content">
                            <h2>Khurram Khalid</h2>
                            <span>Amazon Mentor</span>
                        </div>
                        <div class="mentor-button text-light">
                            <a href="#">Apply Now</a>
                        </div>                   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box text-center">
                        <div class="mentor-image">
                            <img src="{{asset('images/ava.png')}}" alt="">
                        </div>
                        <div class="mentor-content">
                            <h2>Khurram Khalid</h2>
                            <span>Amazon Mentor</span>
                        </div>
                        <div class="mentor-button text-light">
                            <a href="#">Apply Now</a>
                        </div>                   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box text-center">
                        <div class="mentor-image">
                            <img src="{{asset('images/ava.png')}}" alt="">
                        </div>
                        <div class="mentor-content">
                            <h2>Khurram Khalid</h2>
                            <span>Amazon Mentor</span>
                        </div>
                        <div class="mentor-button text-light">
                            <a href="#">Apply Now</a>
                        </div>                   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box text-center">
                        <div class="mentor-image">
                            <img src="{{asset('images/ava.png')}}" alt="">
                        </div>
                        <div class="mentor-content">
                            <h2>Khurram Khalid</h2>
                            <span>Amazon Mentor</span>
                        </div>
                        <div class="mentor-button text-light">
                            <a href="#">Apply Now</a>
                        </div>                   
                    </div>
                </div>
            </div>
      </div>
    </section>


@endsection