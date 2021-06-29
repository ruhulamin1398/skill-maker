@extends('includes.app')

@section('css')
<style>
  #hero {
    background: url("https://enablers.org/wp-content/uploads/2020/01/services-1.jpg") center center;
  }
</style>
@endsection

@section('content')
<!-- ======= Freelancer Profile ======= -->
<section id="freeProfile">
    <div class="container">
        <div class="row text-center">
            {{-- Left Site bar --}}
            <div class="col-lg-4">
                <div class="left-side">
                    <div class="border">
                        <div class="box">
                            <div class="header">
                                <img src="{{ asset('freelancer/images/'. $freelancer -> image) }}" alt="">
                                <h5>{{ $freelancer ->name }}</h5>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="right-side">
                    <div class="right-side-border">
                        <div class="right-box">
                        {{-- Description --}}
                        <div class="des">
                            <div class="des-box text-left">
                                <div class="about">
                                    <h5>Description</h5>
                                    <p>{!! $freelancer -> description !!}</p>
                                </div>
                                <div class="lang text-left">
                                    <h5>Languages</h5>
                                    <p><strong>{{ $freelancer -> language }}</p>
                                </div>
                                <div class="skill text-left">
                                    <h5>Skills</h5>
                                    <span><a href="#">{{ $freelancer -> skills }}</a></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
