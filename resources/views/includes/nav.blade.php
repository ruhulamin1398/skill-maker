<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="drop-down {{ (request()-> is('about')) ? 'active' : '' }}}}"><a href="{{ route('marketplace') }}">Company Profile</a>
            <ul>
                <li class="{{ (request()-> is('about')) ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
                <li class="{{ (request()-> is('success-stories')) ? 'active' : '' }}"><a href="{{route('success-stories')}}">Success Stories</a></li>

                <li class="{{ (request()-> is('officies')) ? 'active' : '' }}"><a href=" ">Our Team</a></li>
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
                         


                        <a href="{{url('single-services',1)}}">Amazon A to Z VA Services</a>
                        <a href="{{url('single-services',2)}}">UK LTD Formation</a>
                        <a href="{{url('single-services',3)}}">UK Physical Address</a>
                        <a href="{{url('single-services',4)}}"> 	VPS</a>
                        <a href="{{url('single-services',5)}}">UK VAT Registration</a>
                        <a href="{{url('single-services',6)}}">UK Trademark</a>
                        
                        <a href="{{route('services')}}" class="font-weight-bold font-italic">More >> </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <a href="{{route('traning')}}"" style=" font-weight: bold; text-transform: uppercase">
                        <i class="fas fa-link" style="margin-right: 5px;"></i>
                        Tranings
                    </a>
                    <div class="megha-item">
                        <a href="{{route('singleTraining',1)}}">Amazon Mastery</a>
                        <a href="{{route('singleTraining',2)}}">Become a Virtual Assistant</a>
                        <a href="{{route('singleTraining',3)}}">Amazon FBA Private Label</a>
                        <a href="{{route('singleTraining',4)}}">Amazon FBA Wholesale</a>
                        <a href="{{route('singleTraining',5)}}">AWS/Devops</a>
                        <a href="{{route('singleTraining',6)}}">Advance Level Photography</a>

                        <a href="{{route('traning')}}"" class=" font-weight-bold font-italic">More >> </a>
                    </div>
                </div>


                
                </div>
        </li>
    </ul>
    </li>
    {{-- 
    <li class="drop-down {{ (request()-> is('tranings')) ? 'active' : '' }}"><a href="{{route('traning')}}">Training</a>
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

    <li class="{{ (request()-> is('seminers')) ? 'active' : '' }}"><a href="{{route('seminer')}}">Seminer</a></li>
    <li class="{{ (request()-> is('support')) ? 'active' : '' }}"><a href="{{route('support')}}">Support</a></li>
    <li class="{{ (request()-> is('marketplace')) ? 'active' : '' }}"><a href="{{ route('marketplace') }}">Marketplace</a></li>


    </ul>
</nav><!-- .nav-menu -->