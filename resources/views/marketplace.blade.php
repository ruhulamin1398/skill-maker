@extends('includes.app')

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
<section id="pageHero" class="marketplaceHero">
    <div class="container d-flex justify-content-center align-items-center h-100">
      <div class="row">
          <div class="col">
              <h1>Hire A Freelancer</h1>
              <span>Freelance services. On demand.</span>
              <form action="">
                <div class="form">

                </div>
              </form>
          </div>
      </div>
    </div>
</section>
<!-- End Hero -->
@endsection
@section('content')
<!-- ======= Disclaimer ======= -->
<section id="disclaimer">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="content">
                    <h1>The simplest way to get more done, faster.</h1>
                    <p>Find the perfect freelancer in three easy step.</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4">
                <div class="icon-box">
                    <img src="{{ asset('theme/frontend/assets/img/disclaimer.png') }}" alt="">
                    <h5>SELECT SERVICES</h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box">
                    <img src="{{ asset('theme/frontend/assets/img/disclaimer.png') }}" alt="">
                    <h5>SELECT SERVICES</h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box">
                    <img src="{{ asset('theme/frontend/assets/img/disclaimer.png') }}" alt="">
                    <h5>SELECT SERVICES</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="disclaimer-box">
                    <p><strong>Disclaimer:</strong> We attempt to provide you this platform to make connections and ease you any inconvenience of finding expert freelancers. However, Enablers do not take any responsibility for your interactions with the following personnel. You are solely responsible for your interactions with them and Enablers takes no liability for any harm resulting from your interactions with them. We reserve the right but have no obligation to monitor these connections.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Freelancer ======= -->
<section id="freelancer">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="content">
                    <h1>Popular Freelancer</h1>
                </div>
            </div>
        </div>
        <div class="row text-center">
            @foreach ($freelancer as $freelancer)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="box">
                        <div class="header">
                            <img src="{{ asset('freelancer/images/'. $freelancer -> image) }}" alt="">
                            <h5>{{ $freelancer -> name }}</h5>
                        </div>
                        <div class="body">
                            <div class="detail-box d-flex align-items-center justify-content-between">
                                <span>Form</span>
                                <strong>{{ $freelancer -> location }}</strong>
                            </div>
                            <div class="detail-box d-flex align-items-center justify-content-between">
                                <span>Member Since</span>
                                <strong>{{ date('F Y', strtotime($freelancer -> created_at)) }}</strong>
                            </div>
                            {{-- <div class="detail-box d-flex align-items-center justify-content-between">
                                <span>Last Online</span>
                                <strong>8 months ago</strong>
                            </div> --}}
                        </div>
                        <div class="footer">
                            <a href="{{ url('freelancer-profile/'. $freelancer -> id) }}">Contact Me</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row text-center">
            <div class="col">
                <div class="view-all">
                    <a href="">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Explore ======= -->
<section id="explore">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="content">
                    <h1>Explore The Marketplace</h1>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="">
                    <div class="box">
                        <img src="{{ asset('theme/frontend/assets/img/explor.png') }}" alt="">
                        <span>A+ Content Manager</span>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="">
                    <div class="box">
                        <img src="{{ asset('theme/frontend/assets/img/explor.png') }}" alt="">
                        <span>A+ Content Manager</span>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="">
                    <div class="box">
                        <img src="{{ asset('theme/frontend/assets/img/explor.png') }}" alt="">
                        <span>A+ Content Manager</span>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="">
                    <div class="box">
                        <img src="{{ asset('theme/frontend/assets/img/explor.png') }}" alt="">
                        <span>A+ Content Manager</span>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="">
                    <div class="box">
                        <img src="{{ asset('theme/frontend/assets/img/explor.png') }}" alt="">
                        <span>A+ Content Manager</span>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="">
                    <div class="box">
                        <img src="{{ asset('theme/frontend/assets/img/explor.png') }}" alt="">
                        <span>A+ Content Manager</span>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="">
                    <div class="box">
                        <img src="{{ asset('theme/frontend/assets/img/explor.png') }}" alt="">
                        <span>A+ Content Manager</span>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <a href="">
                    <div class="box">
                        <img src="{{ asset('theme/frontend/assets/img/explor.png') }}" alt="">
                        <span>A+ Content Manager</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ======= Find ======= -->
<section id="freeFind" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content">
                    <h1>Find an expert for anything</h1>
                    <p>Task Management for work and life. We Help Busy Professionals Get More Done.</p>
                    <a href="">JOIN FOR FREE</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
