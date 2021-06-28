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
                                <img src="{{ asset('theme/frontend/assets/img/freelancer.jpg') }}" alt="">
                                <h5>Muhammad Maaz Iqbal</h5>
                            </div>
                            <div class="body">
                                <div class="detail-box d-flex align-items-center justify-content-between">
                                    <span>Form</span>
                                    <strong>Pakistan</strong>
                                </div>
                                <div class="detail-box d-flex align-items-center justify-content-between">
                                    <span>Member Since</span>
                                    <strong>Nov 2020</strong>
                                </div>
                                <div class="detail-box d-flex align-items-center justify-content-between">
                                    <span>Last Online</span>
                                    <strong>8 months ago</strong>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="{{ route('freelancer-profile') }}">Contact Me</a>
                            </div>
                        </div>
                        {{-- Description --}}
                        <div class="des">
                            <div class="border-top">
                                <div class="des-box text-left">
                                    <div class="about">
                                        <h5>Description</h5>
                                        <p>Hi This is me Sonia M Master Of Computer Science And Ecommerce Amzon Virtual Assistant Expert I Did My VA Specialization From Enablers And Works With MAny Clients And Launches I Handled AtoZ Account Managemnet Product Hunting,Sourcing,Listing,Ranking And PPC</p>
                                    </div>
                                    <div class="lang text-left">
                                        <h5>Languages</h5>
                                        <p><strong>English - </strong> Native/Bilingual</p>
                                    </div>
                                    <div class="skill text-left">
                                        <h5>Skills</h5>
                                        <span><a href="#">Amazon Account Manager</a></span>
                                        <span><a href="#">Listing Creation & Optimization</a></span>
                                        <span><a href="#">Pc Manager</a></span>
                                        <span><a href="#">Product Hunting</a></span>
                                        <span><a href="#">Product Launch & Rank</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="right-side">
                    <div class="right-side-border">
                        <div class="right-box">
                            <div class="review d-flex justify-content-between w-100">
                                <h5>Reviwes <span>(0)</span></h5>
                                <form action="">
                                    <select class="form-control form-control">
                                        <option>Select One</option>
                                        <option>Select One</option>
                                        <option>Select One</option>
                                        <option>Select One</option>
                                    </select>
                                </form>
                            </div>
                            <div class="see-more text-left">
                                <a href="">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
