<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="{{ (request()-> is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
        <li class="{{ (request()-> is('about')) ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
        <li class="drop-down {{ (request()-> is('services')) ? 'active' : '' }}"><a href="{{route('services')}}">Services</a>
            <ul class="megha-menu-ul"">
                <li>
                    <div class="row megha-menu">
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                </li>
            </ul>
        </li>
        <li class="drop-down {{ (request()-> is('tranings')) ? 'active' : '' }}"><a href="{{route('traning')}}">Training</a>
            <ul class="megha-menu-ul"">
                <li>
                    <div class="row megha-menu">
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
        <li class="{{ (request()-> is('seminers')) ? 'active' : '' }}"><a href="{{route('seminer')}}">Seminer</a></li>
        <li class="{{ (request()-> is('success-stories')) ? 'active' : '' }}"><a href="{{route('success-stories')}}">Success Stories</a></li>
        <li class="{{ (request()-> is('support')) ? 'active' : '' }}"><a href="{{route('support')}}">Support</a></li>
        <li class="{{ (request()-> is('officies')) ? 'active' : '' }}"><a href="{{route('officies')}}">Our Offices</a></li>
        <li class="{{ (request()-> is('marketplace')) ? 'active' : '' }}"><a href="{{ route('marketplace') }}">Marketplace</a></li>
    </ul>
</nav><!-- .nav-menu -->
