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
<section id="pageHero" class="singleServiceHero d-flex align-items-center">
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




<!-- ======= Values Section ======= -->

<section id="singleService">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content">
                    <h2>BEST CONTENT WRITING SERVICES</h2>
                    <p>Whether you are a Small Business or a Large Enterprise, Enablers have got you covered whatever your content needs are. Being one of the best content writing service providers, we excel at delivering unique and compelling content to professionals as well as businesses that help them in boosting their growth and help them to establish a strong online presence. We undertake content development projects of all sizes.

                        Our team of professional and brilliant writers provide proper content writing assistance and help in building brand value. Content writers at Enablers create content by doing complete market research and analysis. Along with writers, our qualified SEO experts provide organic SEO solutions to ensure that your website maintains high ranking, allowing you to generate higher returns on your investment.

                        Get the original, high-quality content crafted with engaging dialect and headlines that pop in the content. With Enablers, you can enjoy the following top-notch content writing services:</p>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
