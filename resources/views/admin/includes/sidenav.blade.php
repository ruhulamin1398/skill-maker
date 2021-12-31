<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">


                            <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">  Courses</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('courses.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add New Course</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('courses.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Course</span></a>
                                        </li>

                                    </ul>
                                </li>

                            
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Seminars</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('seminar.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add Seminar</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('seminar.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Seminar</span></a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Our Team</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{route('our-teams.create')}}" class="nk-menu-link"><span class="nk-menu-text">New Member</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('our-teams.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Members</span></a>
                                        </li>

                                    </ul>
                                </li>

{{---
                                
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Success Storys</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{route('success_story.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add Story</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('success_story.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Story</span></a>
                                        </li>

                                    </ul>
                                </li>
---}}
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Faqs</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('faq.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add Faq</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('faq.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Faq</span></a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">  Perticiper</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('perticipators.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add New Perticiper</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('perticipators.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Perticiper</span></a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">  Trainers</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('trainers.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add New Trainer</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('trainers.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Trainer</span></a>
                                        </li>

                                    </ul>
                                </li>
                               {{---
                                
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">  Buy Course</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('buycourses.create') }}" class="nk-menu-link"><span class="nk-menu-text">Buy New Course</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('buycourses.index') }}" class="nk-menu-link"><span class="nk-menu-text">All Course</span></a>
                                        </li>

                                    </ul>
                                </li>
                                
                                
                                ---}}

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">  Supports</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('supports.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add New Support</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('supports.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Support</span></a>
                                        </li>

                                    </ul>
                                </li>
                               
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Freelancers</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('freelancers.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add New Freelancer</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('freelancers.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Frrelancer</span></a>
                                        </li>

                                    </ul>
                                </li>

{{--
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Services</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{route('service.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add Service</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('service.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Service</span></a>
                                        </li>

                                    </ul>
                                </li> 
                                --}}
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Offices</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('office.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add Office</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('office.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Offices</span></a>
                                        </li>

                                    </ul>
                                </li>

                                

                                
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> File Manager</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('file-manager.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add File</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('file-manager.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Files</span></a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Additional Image</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                         
                                        <li class="nk-menu-item">
                                            <a href="{{ route('additional-images.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Images</span></a>
                                        </li>

                                    </ul>
                                </li>

                                

                                
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> Additional Content </span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <!-- <li class="nk-menu-item">
                                            <a href="{{ route('additional-settings.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add File</span></a>
                                        </li> -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route('additional-settings.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Content</span></a>
                                        </li>

                                    </ul>
                                </li>



                                
                                   

                                   
                                @can('student')
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> sss</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('freelancers.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add New Freelancer</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{  route('freelancers.index') }}" class="nk-menu-link"><span class="nk-menu-text">Manage Frrelancer</span></a>
                                        </li>

                                    </ul>
                                </li>
                                @endcan
                     
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
