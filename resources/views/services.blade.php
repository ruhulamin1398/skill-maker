@extends('includes.app')

@section('css')
<style>
  #hero {
    background: url("https://enablers.org/wp-content/uploads/2020/01/services-1.jpg") center center;
  }
</style>
@endsection

@section('hero')
 
 
<section id="pageHero" class="servicesHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
              <h1 style="color: white;">Skill Maker Services</h1>
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
        @foreach ($services as $service)
            <div class="col-lg-4 mb-3">
                    <div class="box" data-aos="fade-up" data-aos-delay="200" style="background: #258cf5;">
                    <img src="{{ asset('course/images/'.$service -> image) }}" class="img-fluid" alt="">
                    <h3 >{{ $service -> course_title }}</h3>

                     <p>
                        @php
                        echo (implode(' ', array_slice(explode(' ', strip_tags($service->description)), 0, 13))."\n");
                        @endphp
                    </p>

                    <div class="text-center">
                        <a href="{{ url('single-services/'. $service -> id) }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                    </div>
                    </div>
                </div>
        @endforeach

    </div>

  </div>

</section><!-- End Values Section -->










@endsection
