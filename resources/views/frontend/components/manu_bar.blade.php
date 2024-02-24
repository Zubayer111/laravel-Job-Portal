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
                    <div class="col-lg-9 col-md-9">
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
                                <a href="{{url("/dashboard")}}" class="btn head-btn2">Dashboard</a>
                            </div>
                            @else 
                            <div class="header-btn d-none f-right d-lg-block">
                                <a href="{{url("/company-apply-page")}}" class="btn head-btn2">Apply for Company</a>
                            </div>
                             @endif
                            
                            <div class="header-btn d-none f-right d-lg-block">
                                @auth
                                    <!-- Show user's name and logout button -->
                                        
                                            
                                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-link text-white">Logout</button>
                                            </form>
                                        
                                    @else
                                        <!-- Show login button if user is not logged in -->
                                        <a href="{{ url('/login-page') }}" class="btn head-btn2">Login</a>
                                    @endauth
                            </div>
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
