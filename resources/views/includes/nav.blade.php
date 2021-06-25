<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="{{ (request()-> is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
        <li class="{{ (request()-> is('about')) ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
        <li class="{{ (request()-> is('services')) ? 'active' : '' }}"><a href="{{route('services')}}">Services</a></li>
        <li class="{{ (request()-> is('tranings')) ? 'active' : '' }}"><a href="{{route('traning')}}">Training</a></li>
        <li class="{{ (request()-> is('seminers')) ? 'active' : '' }}"><a href="{{route('seminer')}}">Seminer</a></li>
        <li class="{{ (request()-> is('success-stories')) ? 'active' : '' }}"><a href="{{route('success-stories')}}">Success Stories</a></li>
        <li class="{{ (request()-> is('support')) ? 'active' : '' }}"><a href="{{route('support')}}">Support</a></li>
        <li class="{{ (request()-> is('officies')) ? 'active' : '' }}"><a href="{{route('officies')}}">Our Offices</a></li>
    </ul>
</nav><!-- .nav-menu -->
