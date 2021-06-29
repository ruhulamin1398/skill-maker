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
<section id="pageHero" class="seminarHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
              <h1>LEADING ECOMMERCE & DIGITAL <br> MARKETING AGENCY</h1>
          </div>
      </div>
    </div>
</section>
@endsection

@section('content')


{{--
    <header class="section-header2">
      <!-- <h2>Our Values</h2> -->
      <p class="section--header"> &nbsp; </p>
    </header> --}}
    <!-- ======= Seminar table ======= -->

    <section id="enableSeminar">
      <div class="container">
        <div class="row text-center">
          <div class="col h-100">
            <h2>UPCOMING ENABLERS SEMINARS</h2>
            <div class="seminar-rs d-flex justify-content-center align-items-center">
              <h2>PARTICIPATION COST:</h2>
              <span>Rs.800</span>
            </div>
          </div>
        </div>
        <!-- content -->
        <div class="row">
          <div class="col">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" style="width: 25%;">Date</th>
                  <th scope="col" style="width: 25%;">Locations</th>
                  <th scope="col" style="width: 30%;">Venue</th>
                  <th scope="col" style="width: 20%;">Registration</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($seminar as $seminar)
                    <tr>
                        <th scope="row">{{ date('F Y', strtotime($seminar -> date)) }}</th>
                        <td>{{ $seminar -> location }}</td>
                        <td>{{ $seminar -> venue  }}</td>
                        <td><a href="#">Open</a></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col text-center pt-4">
            <a href="" class="table-btn">RESERVE MY SEAT</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= seminar Blog  ======= -->
    <section id="seminarBlog">
      <div class="container">
        <!-- box 1 -->
        <div class="box">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <img src="https://www.enablers.org/wp-content/uploads/2020/02/enablers-amazon-fba-successful-business-pakistan.png" alt="">
                </div>
                <div class="col-md-6">
                    <h3>AMAZON ACCOUNT <br>
                        SETUP</h3>
                        <p>Amazon is one of the largest E-Commerce stores across the globe. With a huge number of sellers are already selling various commodities on this platform, it can be a difficult feat to boost your sales and get an edge over the rest of the sellers.
                            <br><br>
                          However, with the premium services of Enablers, your Amazon account will be up and running with your products in no time. Our experienced trainers will handle A to Z.
                            <br><br>
                          Now You Can Have The Exact System Thousands Have Used To Build A Million Dollar Business, Achieve Their Dreams & Live Free From The 9 To 5 Rat Race! </p>
                </div>
            </div>
        </div>
        <!-- Bosx 2 -->
        <div class="box">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3>AMAZON ACCOUNT <br>
                        SETUP</h3>
                        <p>Amazon is one of the largest E-Commerce stores across the globe. With a huge number of sellers are already selling various commodities on this platform, it can be a difficult feat to boost your sales and get an edge over the rest of the sellers.
                          <br><br>
                          However, with the premium services of Enablers, your Amazon account will be up and running with your products in no time. Our experienced trainers will handle A to Z.
                          <br><br>
                          Now You Can Have The Exact System Thousands Have Used To Build A Million Dollar Business, Achieve Their Dreams & Live Free From The 9 To 5 Rat Race! </p>
                </div>
                <div class="col-md-6 text-center">
                     <img src="https://www.enablers.org/wp-content/uploads/2020/02/enablers-amazon-fba-business-opportunity.png" alt="">
                </div>
            </div>
        </div>
        <!-- box 3 -->
        <div class="box">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                     <img src="https://www.enablers.org/wp-content/uploads/2020/02/enablers-amazon-growth-oppotunity.png" alt="">
                </div>
                <div class="col-md-6">
                    <h3>AMAZON ACCOUNT <br>
                        SETUP</h3>
                        <p>Amazon is one of the largest E-Commerce stores across the globe. With a huge number of sellers are already selling various commodities on this platform, it can be a difficult feat to boost your sales and get an edge over the rest of the sellers.
                          <br><br>
                          However, with the premium services of Enablers, your Amazon account will be up and running with your products in no time. Our experienced trainers will handle A to Z.
                          <br><br>
                          Now You Can Have The Exact System Thousands Have Used To Build A Million Dollar Business, Achieve Their Dreams & Live Free From The 9 To 5 Rat Race! </p>
                </div>
            </div>
        </div>
        <!-- Bosx 4 -->
        <div class="box">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3>AMAZON ACCOUNT <br>
                        SETUP</h3>
                        <p>Amazon is one of the largest E-Commerce stores across the globe. With a huge number of sellers are already selling various commodities on this platform, it can be a difficult feat to boost your sales and get an edge over the rest of the sellers.
                          <br><br>
                          However, with the premium services of Enablers, your Amazon account will be up and running with your products in no time. Our experienced trainers will handle A to Z.
                          <br><br>
                          Now You Can Have The Exact System Thousands Have Used To Build A Million Dollar Business, Achieve Their Dreams & Live Free From The 9 To 5 Rat Race! </p>
                </div>
                <div class="col-md-6 text-center">
                     <img src="https://www.enablers.org/wp-content/uploads/2020/02/enablers-amazon-growth-oppotunity.png" alt="">
                </div>
            </div>
        </div>

      </div>
    </section>
    <!-- ======= Seminar Blog  ======= -->



@endsection
