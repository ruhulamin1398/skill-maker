@php 
$navTrainngs = App\Models\course::where('type','training')->orderBy('serial')->get()->take(6);
$navServices = App\Models\course::where('type','service')->orderBy('serial')->get()->take(6);

@endphp
 


<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="drop-down {{ (request()-> is('about')) ? 'active' : '' }}}}"><a href="{{ route('marketplace') }}">Company Profile</a>
            <ul>
                <li class="{{ (request()-> is('about')) ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
                <li class="{{ (request()-> is('ourTeam')) ? 'active' : '' }}"><a href="{{route('ourTeam')}}">Our Team</a></li>
 
                <li class="{{ (request()-> is('officies')) ? 'active' : '' }}"><a href="{{route('officies')}}">Our Offices</a></li>
                <li class=""><a href="#">Terms And Condition</a></li>
                <li class=""><a href="#">Privacy Policy</a></li>
            </ul>
        </li>

        <li class="drop-down {{ (request()-> is('services')) ? 'active' : '' }}"><a>We Provide</a>
            <ul class="megha-menu-ul"">
                <li>
                    <div class=" row megha-menu">
                <div class="col-md-6">
                    <a href="{{route('services')}}"" style=" font-weight: bold; text-transform: uppercase">
                        <i class="fas fa-link" style="margin-right: 5px;"></i>
                        Services
                    </a>
                    <div class="megha-item">
   
                        @foreach($navServices as $navService)

                        <a href="{{url('single-services',$navService->id)}}">{{$navService->course_title}}</a> 
                        @endforeach
                        <a href="{{route('services')}}" class="font-weight-bold font-italic">More >> </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <a href="{{route('trainings')}}"" style=" font-weight: bold; text-transform: uppercase">
                        <i class="fas fa-link" style="margin-right: 5px;"></i>
                        Trainings
                    </a>
                    <div class="megha-item">
                    
                    @foreach($navTrainngs as $navTrainng)
                    
                  
                  
                        <a href="{{route('singleTrainings',$navTrainng->id)}}">{{$navTrainng->course_title}}  </a>

                    @endforeach

                        <a href="{{route('trainings')}}"" class=" font-weight-bold font-italic">More >> </a>
                    </div>
                </div>


                
                </div>
        </li>
    </ul>
    </li>
    {{-- 
    <li class="drop-down {{ (request()-> is('trainings')) ? 'active' : '' }}"><a href="{{route('trainings')}}">Training</a>
        <ul class="megha-menu-ul"">
                    <li>
                        <div class=" row megha-menu">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" style="font-weight: bold; text-transform: uppercase">
                            <i class="fas fa-link" style="margin-right: 5px;"></i>
                            Web Design
                        </a>
                        <div class="megha-item">
                            <a href="#">Product Listing</a>
                            <a href="#">Product Launching</a>
                            <a href="#">Product Photography</a>
                            <a href="#">Content Writing</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="#" style="font-weight: bold; text-transform: uppercase">
                            <i class="fas fa-link" style="margin-right: 5px;"></i>
                            Web Design
                        </a>
                        <div class="megha-item">
                            <a href="#">Product Listing</a>
                            <a href="#">Product Launching</a>
                            <a href="#">Product Photography</a>
                            <a href="#">Content Writing</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="#" style="font-weight: bold; text-transform: uppercase">
                            <i class="fas fa-link" style="margin-right: 5px;"></i>
                            Web Design
                        </a>
                        <div class="megha-item">
                            <a href="#">Product Listing</a>
                            <a href="#">Product Launching</a>
                            <a href="#">Product Photography</a>
                            <a href="#">Content Writing</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="#" style="font-weight: bold; text-transform: uppercase">
                            <i class="fas fa-link" style="margin-right: 5px;"></i>
                            Web Design
                        </a>
                        <div class="megha-item">
                            <a href="#">Product Listing</a>
                            <a href="#">Product Launching</a>
                            <a href="#">Product Photography</a>
                            <a href="#">Content Writing</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img class="megha-menu-image" src="{{ asset('theme/frontend/assets/img/about2.jpg') }}" alt="">
            </div>
            </div>
            </li>
        </ul>
    </li>
    --}}

    <li class="{{ (request()-> is('seminar')) ? 'active' : '' }}"><a href="{{route('seminar')}}">Seminar</a></li>
    <li class="{{ (request()-> is('support')) ? 'active' : '' }}"><a href="{{route('support')}}">Support</a></li>
    <li class="{{ (request()-> is('marketplace')) ? 'active' : '' }}"><a href="{{ route('marketplace') }}">Marketplace</a></li>


    </ul>
</nav><!-- .nav-menu -->