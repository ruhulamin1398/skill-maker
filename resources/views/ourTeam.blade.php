@extends('includes.app')


@section('css')
<style> 
 #pageHero {
    background: url("{{ asset(App\Models\additionalImage::find(11)->link )}}") center center;
    background-repeat: no-repeat;
    background-size:  100% auto;
  }
 

  .icon{
    display: none  !important;
  }
</style>
@endsection

@section('hero')

<section id="pageHero" class="successHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
          <h1>LISTEN FROM , WHO NEVER GAVE UP</h1>
          </div>
      </div>
    </div>
</section>
@endsection

@section('content')

<!-- ======= Team Section ======= -->
<section id="doctors" class="doctors2">
  <div class="container" data-aos="fade-up">
  <h1 class="mb-4 text-center">Trainers</h1>
    <div class="row">

        @foreach ($trainers as $trainer)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('trainer/images/'. $trainer -> image)}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ $trainer -> name }}</h4>
                <strong>{{ $trainer -> location }}</strong>
                <span>
                    @php
                    echo (implode(' ', array_slice(explode(' ', strip_tags($trainer ->long_desctiption)), 0, 13))."\n");
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


    <!-- ======= Team Section ======= -->
    <section id="doctors" class="doctors2">
      <div class="container" data-aos="fade-up">
      <h1 class="mb-4 text-center">Executive Team</h1>
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
