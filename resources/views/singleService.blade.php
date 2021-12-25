@extends('includes.app')

@section('css')
<style>
  #hero {
    background: url("{{ asset('theme/frontend/assets/img/single_service_header.jpg') }}") center center;
  }

  .singleServiceHero {
    background: url("{{ asset('course/images/'.$service->breadcrumb_image) }}") top right;
  }
</style>
@endsection

@section('hero')

<!-- ======= Hero Section ======= -->

<section id="pageHero" class="singleServiceHero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 style="color: white;">{{ $service ->course_title  }} </h1>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->


@endsection

@section('content')




<!-- ======= Values Section ======= -->
<div class="container">



  <section id="singleService">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="content">
            <h2>{{ $service -> course_title }} </h2>
            <p>{!! $service -> description !!}</p>




          </div>
        </div>


        <div class="col-12 col-md-4">
          <div class="content border border-dark rounded p-4 text-center">
            <div class="text-center">{{ $service -> course_title }}</div>
            <hr>
            <div class="text-center mb-3">Price : ${{ $service -> price }}</div>
            <a href="{{route('users.enrolls.index')}}?service_id={{ $service -> id }}" class="appointment-btn scrollto  ">Start Now</a>
          </div>
        </div>



      </div>
    </div>
  </section>
</div>








@endsection