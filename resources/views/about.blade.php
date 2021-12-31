@extends('includes.app')
@section('status', 'active')


@section('css')
<style>
  #pageHero {
    background: url("{{ asset(App\Models\additionalImage::find(2)->link )}}") center center;
    background-repeat: no-repeat;
    background-size:  100% auto;
  }

  #aboutValues{
    background: url("{{ asset(App\Models\additionalImage::find(10)->link )}}") center center no-repeat;
    background-size: cover;
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
        <h1 style="color: white;"> &nbsp;&nbsp;</h1>
      </div>
    </div>
  </div>
</section>


<!-- End Hero -->
@endsection

@section('content')

<!-- ======= About Section ======= -->
<section class="about2  ">
  <div class="container  " data-aos="fade-up">
    <div class="row  ">
      <div class=" col-12 col-md-8 text-justify">

        <!-- <h2> All about the skillmaker</h2> -->
        <p>

          skillmaker is an e-learning and services platform established in 2020. We offer a wide variety of e-learning and services through e-learning courses and services based on current market trend particularly in the US-UK-EU-Canada-UAE markets. Align with the vision of the Bangladesh Government to become Digital Bangladesh, we take pride to be a part of this digital revolution by offering a great opportunities for the people, particularly for the segments of Students, Women, Underemployed People, Homemaker, Entrepreneurs & SMEs to be the active part of go digital and contribute heavily to their family, society and to the country at large by earning significant foreign currency.
        </p>

        <p class="font-weight-bold font-italic text-center">
        “ We are here for Empowering Societies in Digital means. ”
        </p>

        <p>
          skillmaker is here to provide scopes to the various segments of the people of the country to take the opportunities by building a wide variety of skillset and build their lifelong career. Our courses and services offer a wide variety of skills so that people can develop their proper skillset to compete in the current global market and earn independently. As Bangladesh is an emerging nation in digital market place we the skillmaker promises to provide immense opportunities to the potential e-learners to fulfill their dream. skillmaker is here to offer a great learning platform for the learners from where they can eventually see themselves as powerful e-services holders and earn significant foreign currency for them and for the country.revolution by offering a great opportunities for the people, particularly for the segments of Students, Women, Underemployed People, Homemaker, Entrepreneurs & SMEs to be the active part of go digital and contribute heavily to their family, society and to the country at large by earning significant foreign currency.
        </p>

      </div>

      <div class="col-12 col-md-4">

        <!-- ======= Services Section ======= -->
        <section class="vission1 p-2 m-0">
          <div class="container">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-12">
                <div class="icon-box icon-box1">
                  {{-- <i class="icofont-computer"></i> --}}
                  <!-- <h4>Our Vission</h4> -->
                  <p>
                    Our VISION is to Coach, Teach and Building Skills to be an Expert who can show his Competency and ready to compete with Global Digital Market.
                  </p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="icon-box icon-box2">
                  {{-- <i class="icofont-chart-bar-graph"></i> --}}
                  <!-- <h4>Our Mission</h4> -->
                  <p>
                    Our MISSION is to take part in Digital Revolution and the Economic Growth of Bangladesh by establishing a Skilled Workforce who will Compete Global e-Commerce Marketplace and attain Financial Freedom.
                  </p>
                </div>
              </div>


              <div class="col-md-12">
                <div class="icon-box icon-box3">
                  {{-- <i class="icofont-chart-bar-graph"></i> --}}
                  <!-- <h4>Our Goals and Tasks</h4> -->
                  <p>

                    We’re aiming to Create 2 Million employment Opportunities in Bangladesh by 2024. We'll continue to explore, define and refine our targeted audiences goals and tasks as they will get more comfortable with their career growth.

                  </p>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Services Section -->

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
          <h2>Our Scope of work for the people to be engaged:</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="content">
          <p>
            <ul>
              <li>Women, through our Empowering Women platform.</li>
              <li>Underemployed people who are treated only for Home Maker in the society.</li>
              <li>Students.</li>
              <li>Entrepreneur and SME.</li>
              <li>Corporates.</li>
            </ul>
 
          </p>


        </div>
      </div>
    </div>
    <!-- <div class="row text-center image">
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
    </div> -->
  </div>
</section>
{{--
<section class="about2  ">
  <div class="container  " data-aos="fade-up">
    <div class="row  ">

      <div class="text-center title">
        <h2>Who we are</h2>
        <p>skillmaker is an e-learning and services platform established in 2020. We offer a wide variety of e-learning and services through e-learning courses and services based on current market trend particularly in the US-UK-EU-Canada-UAE markets. Align with the vision of the Bangladesh Government to become Digital Bangladesh, we take pride to be a part of this digital revolution by offering a great opportunities for the people, particularly for the segments of Students, Women, Underemployed People, Homemaker, Entrepreneurs & SMEs to be the active part of go digital and contribute heavily to their family, society and to the country at large by earning significant foreign currency. .</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <img src="{{ asset('theme/frontend/assets/img/about2.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div>
            Our Society is changing rapidly with the pace of the world’s dynamic behavior. Thanks to our Government, People’s Republic of Bangladesh and its ICT Division who takes the mission of Digital Bangladesh with utmost care and transforming the country widely into the digital platform. <br> <br>
            We take pride to be a part of this digital revolution. We aim to work with various segment of our society to enhance Digital Development through Online Learning Platform, where people can engage themselves to enhance their potential skills into reality to contribute their family, society and to the country at large. <br> <br>
            Now a days people around the world want things faster and getting things faster through Outsourcing is the key to make it happening across the world. Bangladesh is slowly but steadily becoming one of the biggest platforms for outsourcing the services and through which it is also becoming one of the significant earning sources of foreign currency in the country. <br> <br>

          </div>
        </div>
      </div>


      <div class="pt-4">
        skillmaker is here to provide scopes to the various segments of the people of the country to take the opportunities by building a wide variety of skillset and build their lifelong career. Our courses and services offer a wide variety of skills so that people can develop their proper skillset to compete in the current global market and earn independently. As Bangladesh is an emerging nation in digital market place we the skillmaker promises to provide immense opportunities to the potential e-learners to fulfill their dream. skillmaker is here to offer a great learning platform for the learners from where they can eventually see themselves as powerful e-services holders and earn significant foreign currency for them and for the country.
      </div>
      <b>Our Scope of work for the people to be engaged: </b>
      <ul>
        <li>Women, through our Empowering Women platform.</li>
        <li>Underemployed people who are treated only for Home Maker in the society.
        </li>
        <li>Students.</li>
        <li>Entrepreneur and SME.</li>
        <li>Corporates.</li>
      </ul>
    </div>
</section><!-- End About Section -->
 --}}

<!-- ======= Founder Section ======= -->
<section class="founder mt-4 pt-4">
  <div class="container">

    <div class="title text-center">
      <h2>OUR PATHFINDERS</h2>
    </div>

    <div class="row">


       @foreach ($ourTeams as $ourTeam)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="{{asset('ourTeam/images/'. $ourTeam -> image)}}" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4>{{ $ourTeam -> name }}</h4>
                    <strong>{{ $ourTeam -> location }}</strong>
                    <span>
                        @php
                        echo (implode(' ', array_slice(explode(' ', strip_tags($ourTeam -> short_desctiption)), 0, 13))."\n");
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