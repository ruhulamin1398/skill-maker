@extends('includes.app')

@section('css')
<style>
  #hero {
    background: url("{{ asset('theme/frontend/assets/img/single_service_header.jpg') }}") center center;
  }

  .singleServiceHero {
    background: url("{{ asset('seminar/images/'.$seminar->breadcrumb_image) }}") top right;
  }
</style>
@endsection

@section('hero')

<!-- ======= Hero Section ======= -->

<section id="pageHero" class="singleServiceHero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 style="color: white;">Seminar : &nbsp;&nbsp;&nbsp;&nbsp; {{ $seminar ->title  }} </h1>
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
            <h2>{{ $seminar -> title }} </h2>
            <p>{!! $seminar -> description !!}</p>




          </div>
        </div>


        <div class="col-12 col-md-4">
          <div class="content border border-dark rounded p-4 mb-4 text-center">
            
          <div class="text-center font-weight-bold mb-3 font-italic">{{ $seminar -> title }}</div>
            <div class="text-left"> <span class="font-weight-bold ">Date: &nbsp;&nbsp;&nbsp;</span><span class="font-italic ">{{ date('F Y', strtotime($seminar -> date)) }} </span> </div>
            <div class="text-left">  <span class="font-weight-bold ">Location: &nbsp;&nbsp;&nbsp;</span><span class="font-italic ">   {{ $seminar -> location }} </span> </div>
            <div class="text-left"> <span class="font-weight-bold ">Venue: &nbsp;&nbsp;&nbsp;</span>  <span class="font-italic ">  {{ $seminar -> venue }} </span> </div> 
            <hr>
            <div class="text-center mb-3">Price : ${{ $seminar -> price }}</div>
            <!-- <a href="#" class="appointment-btn scrollto  ">RESERVE MY SEAT</a> -->


            <form action="{{route('users.enrolls.store')}}" method="post">
              @csrf
              <input type="text" name="course_id" id="course_id" value="0" hidden>
              <input type="text" name="seminar_id" id="seminar_id" value="{{$seminar->id}}" hidden>
              <input type="text" name="price" id="price" value="{{ $seminar -> price }}" hidden>

              <input type="text" name="payment_method" id="payment_method" value="CASH" hidden>

              <input type="text" name="payment_Comment" id="payment_Comment" value="Payment via cash" hidden>

            <button type="submit"  class=" btn appointment-btn scrollto  ">RESERVE MY SEAT</button>
            </form>


          </div>
        </div>



      </div>
    </div>
  </section>
</div>








@endsection