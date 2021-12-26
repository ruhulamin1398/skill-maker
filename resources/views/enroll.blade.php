@extends('includes.app')
@section('status', 'active')


@section('css')
<style>
  #pageHero {
    background: url("http://127.0.0.1:8000/course/images/Amazon_A_to_Z_VA_Services1640433495image.png") center center;
  }
</style>
@endsection



@section('hero')
-


<section id="pageHero" class="aboutHero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 style="color: white;"> All about the Skillmaker</h1>
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

        <!-- <h2> All about the Skillmaker</h2> -->
        <p>

          Skillmaker is an e-learning and services platform established in 2020. We offer a wide variety of e-learning and services through e-learning courses and services based on current market trend particularly in the US-UK-EU-Canada-UAE markets. Align with the vision of the Bangladesh Government to become Digital Bangladesh, we take pride to be a part of this digital revolution by offering a great opportunities for the people, particularly for the segments of Students, Women, Underemployed People, Homemaker, Entrepreneurs & SMEs to be the active part of go digital and contribute heavily to their family, society and to the country at large by earning significant foreign currency.
        </p>

        <p class="font-weight-bold font-italic text-center">
        “ We are here for Empowering Societies in Digital means. ”
        </p>

        <p>
          Skillmaker is here to provide scopes to the various segments of the people of the country to take the opportunities by building a wide variety of skillset and build their lifelong career. Our courses and services offer a wide variety of skills so that people can develop their proper skillset to compete in the current global market and earn independently. As Bangladesh is an emerging nation in digital market place we the Skillmaker promises to provide immense opportunities to the potential e-learners to fulfill their dream. Skillmaker is here to offer a great learning platform for the learners from where they can eventually see themselves as powerful e-services holders and earn significant foreign currency for them and for the country.revolution by offering a great opportunities for the people, particularly for the segments of Students, Women, Underemployed People, Homemaker, Entrepreneurs & SMEs to be the active part of go digital and contribute heavily to their family, society and to the country at large by earning significant foreign currency.
        </p>

      </div>

      <div class="col-12 col-md-4">




      <div class="content border border-dark rounded p-4 mb-4 text-center">
            <div class="text-center">  $training -> course_title  </div>
            <hr>
            <div class="text-center mb-3">Price : $  $training -> price  </div>
            <a href="#" class="appointment-btn scrollto  ">Start Now</a>
          </div>



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
            
 

            </div>

          </div>
        </section><!-- End Services Section -->

      </div>

    </div>
  </div>
  </div>
</section><!-- End Team Section -->



@endsection