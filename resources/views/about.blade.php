@extends('includes.app')
@section('status', 'active')

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
<section id="pageHero" class="aboutHero d-flex align-items-center">
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

    <!-- ======= About Section ======= -->
    <section class="about2">
        <div class="container" data-aos="fade-up">

          <div class="text-center title">
            <h2>Who we are</h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <img src="{{ asset('theme/frontend/assets/img/about2.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
              <p>
                Maybe you don’t know what business to start or even where to begin. Maybe it feels too difficult, unclear, and risky.

                Or, you do get started and then what? You struggle to get sales, face competition, and have to do everything yourself. You struggle to build a profitable business, much less achieve freedom.

                We know how people struggle to get their online businesses off the ground profitably. We solve this by teaching you step-by-step tested and proven tactics. Whether you are just getting started, or have been selling awhile, we’ve got something for everyone!

                We’ve been continually updating our courses, adding creative new strategies, and most importantly, turning our students into success stories. We offer most comprehensive, creative and up-to-date course programs supported by the largest team of successful Amazon selling moderators.
              </p>
              <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
              <p>
                We’ve been continually updating our courses, adding creative new strategies, and most importantly, turning our students into success stories. We offer most comprehensive, creative and up-to-date course programs supported by the largest team of successful Amazon selling moderators.</p>
            </div>
          </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section class="vission1">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="icon-box icon-box1">
                    {{-- <i class="icofont-computer"></i> --}}
                    <h4>Our Vission</h4>
                    <p>To help establish 200,000 Businesses and create 2 Million employment opportunities in Pakistan by 2023, and adding additional 50 Million Exports for the International E-Commerce Marketplaces.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box icon-box2">
                    {{-- <i class="icofont-chart-bar-graph"></i> --}}
                    <h4>Our Mission</h4>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box icon-box3">
                    {{-- <i class="icofont-chart-bar-graph"></i> --}}
                    <h4>Our Goals</h4>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= Founder Section ======= -->
    <section class="founder">
      <div class="container">

        <div class="title text-center">
          <h2>OUR PATHFINDERS</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic">
                  <img src="{{ asset('theme/frontend/assets/img/founder.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic">
                  <img src="{{ asset('theme/frontend/assets/img/founder.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic">
                  <img src="{{ asset('theme/frontend/assets/img/founder.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic">
                  <img src="{{ asset('theme/frontend/assets/img/founder.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Team Section -->

    <section id="aboutValues">
        <div class="container text-light">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h2>CORE VALUES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col">
                  <div class="content">
                    <p>We enable individuals to utilize their capabilities in the best possible way. Our spirit of achievement extends to advancing your profession to help you attain exemplary vision. What distinguishes us in the industry is that we believe in innovation and continuous improvement. Our core values mainly include:</p>
                    <ul>
                      <li>To be the Premier Source for Country’s Economic Development.</li>
                      <li>To promote the intellectual, professional, social and personal development of Youth.
                      </li>
                      <li>To be the Premier Source for Country’s Economic Development.</li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="row text-center image">
              <div class="col-lg-2">
                <img src="{{ asset('theme/frontend/assets/img/innovation-blue.png') }}" alt="">
                <h4>INNOVATION</h4>
              </div>
              <div class="col-lg-2">
                <img src="{{ asset('theme/frontend/assets/img/innovation-blue.png') }}" alt="">
                <h4>INNOVATION</h4>
              </div>
              <div class="col-lg-2">
                <img src="{{ asset('theme/frontend/assets/img/innovation-blue.png') }}" alt="">
                <h4>INNOVATION</h4>
              </div>
              <div class="col-lg-2">
                <img src="{{ asset('theme/frontend/assets/img/innovation-blue.png') }}" alt="">
                <h4>INNOVATION</h4>
              </div>
              <div class="col-lg-2">
                <img src="{{ asset('theme/frontend/assets/img/innovation-blue.png') }}" alt="">
                <h4>INNOVATION</h4>
              </div>
              <div class="col-lg-2">
                <img src="{{ asset('theme/frontend/assets/img/innovation-blue.png') }}" alt="">
                <h4>INNOVATION</h4>
              </div>
            </div>
        </div>
    </section>




@endsection
