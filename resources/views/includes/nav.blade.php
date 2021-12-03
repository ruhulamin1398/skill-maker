<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="drop-down {{ (request()-> is('about')) ? 'active' : '' }}}}"><a href="{{ route('marketplace') }}">Company Profile</a>
            <ul>
                <li class="{{ (request()-> is('about')) ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
                <li class="{{ (request()-> is('success-stories')) ? 'active' : '' }}"><a href="{{route('success-stories')}}">Success Stories</a></li>

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
                        <a href="#">Skillmaker Investment Opportunities</a>
                        <a href="#">Skillmaker Learn & Earn Program</a>
                        <a href="#">Product Hunting</a>
                        <a href="#">Content Writing</a>
                        <a href="#">Product Launching</a>
                        <a href="#">Product Photography</a>
                        <a href="{{route('services')}}" class="font-weight-bold font-italic">More >> </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <a href="{{route('traning')}}"" style=" font-weight: bold; text-transform: uppercase">
                        <i class="fas fa-link" style="margin-right: 5px;"></i>
                        Tranings
                    </a>
                    <div class="megha-item">
                        <a href="#">Amazon Mastery</a>
                        <a href="#">Become a Virtual Assistant</a>
                        <a href="#">Amazon FBA Private Label</a>
                        <a href="#">Amazon FBA Wholesale</a>
                        <a href="#">AWS/Devops</a>
                        <a href="#">Advance Level Photography</a>

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