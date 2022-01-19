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
                        <div class="box" style="padding: 0;">
                            <div class="header">
                                <img src="{{asset('ourTeam/images/'. $team -> image)}}" alt="" 
                                style="
                                width: 100%;
                                height: auto;
                                border-radius: 1px;">
                                <h5>{{ $team ->name }}</h5>
                            </div>
                            <div class="body pl-4 pr-4" >
                                <div class="detail-box text-center">
                                  
                                    <strong>{{ $team -> location }}</strong>
                                    <div>
                                    @php
                        echo (implode(' ', array_slice(explode(' ', strip_tags($team -> short_desctiption)), 0, 13))."\n");
                        @endphp
                                
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
                        {{-- Description --}}
                        <div class="des">
                            <div class="des-box text-left">
                                <div class="about">
                                    <p>{!! $team ->long_description !!}</p>
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
