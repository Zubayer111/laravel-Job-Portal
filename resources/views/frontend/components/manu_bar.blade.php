<header>
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{url("/")}}"><img src="{{asset("frontend/assets/img/logo/logo.png")}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{url("/")}}">Home</a></li>
                                        <li><a href="{{url("/Job-Page")}}">Find a Jobs </a></li>
                                        <li><a href="{{url("/about-Page")}}">About</a></li>
                                        <li><a href="{{url("/blog-page")}}">Blog</a></li>
                                        <li><a href="{{url("/Contact-Page")}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                            @if(session('success'))
                            
                                        <div class="header-btn d-none f-right d-lg-block">
                                            
                                        </div>
                            @else 
                            <div class="">
                                <a href="{{url("/company-apply-page")}}" type="button" class="btn btn-sm">Apply for Company</a>
                            </div>
                             @endif
                             @auth
                             <!-- Show user's name and logout button -->
                             <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        @auth
                                        <li><a href="#">Welcome, {{ auth()->user()->name }}</a>
                                        @endauth
                                            <ul class="submenu">
                                                {{-- @if(session('success'))
                                                <li><a  href="{{url("/view-profile-page")}}">View Profile</a></li>
                                                @else --}}
                                                <li><a  href="{{url("/dashboard/profile")}}">Dashboard</a></li>
                                                
                                                <li>
                                                    <a  href="{{url("logout")}}">Logout</a></li>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                
                            </div>
                                 
                             @else
                                 <!-- Show login button if user is not logged in -->
                                 <a href="{{ url('/login-page') }}" class="btn head-btn2">Login</a>
                            @endauth
                             
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
