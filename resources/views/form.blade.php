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
@endsection

@section('content')








 

<header class="section-header2">
      <!-- <h2>Our Values</h2> -->
      <p class="section--header"> &nbsp; </p>
    </header>
    <!-- ======= Seminar table ======= -->
 
 
    <section id="enableForm">
       <div class="container">
        <div class="row">
            <div class="col">
                <p>Kindly fill the form below to enroll!</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name:</label>
                            <input type="text" name="" class="form-control" placeholder="Enter Your Full Name"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label> Father Name</label>
                            <input type="text" name="" class="form-control" placeholder="Enter Your Father Name"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label> WhatsApp Number:</label>
                            <input type="number" name="" class="form-control" placeholder="Enter Your WhatsApp Number"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label> Email Address:</label>
                            <input type="text" name="" class="form-control" placeholder="Enter Your Email Address"
                            />
                        </div>
                        <div class="form-group col-md-6">
                            <label> CNIC or Passport:</label>
                            <input type="number" name="" class="form-control" placeholder="Enter Your CNIC or Passport Number"/>
                        </div>
                
                        <div class="form-group col-md-6">
                            <label>City:</label>
                            <input type="text" name="" class="form-control" placeholder="Enter Your City"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label> Country:</label>
                            <input type="text" name="" class="form-control" placeholder="Enter Your Country"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label> Training:</label>
                            <input type="text" name="" class="form-control"  placeholder="Virtual assistant training"/>
                        </div>
                
                        <div class="form-group col-md-6">
                            <label>Where from you heard about Enablers ?</label>
                            <select class="form-control" name="" id="heard">
                                <option value="">Select</option>
                                <option value="">Social Media</option>
                                <option value="">Printing Media</option>
                                <option value="">Electronic Media</option>
                                <option value=""> Friends/Family</option>
                                <option value=""> Colleagues</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Payment Type:</label>
                            <select class="form-control" name="">
                                <option value="">Select</option>
                                <option value="cash">Cash Deposit</option>
                                <option value="online">Online/Internet Bank Transfer</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div>
                               <input type="checkbox"><span style="padding-left: 13px;">I agree to the terms and conditions</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                               <input class="submit btn" type="submit" name="submit" value="Submit">
                            </div>
                      </div>
                    </div>
                </form>
                
            </div>
        </div>
       </div>
    </section>


@endsection