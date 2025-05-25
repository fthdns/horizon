<!-- Background Navbar & Header -->
<div class="bg">
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light px-3 bg-white">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ url('frontend/images/logo.png') }}" alt="Logo Horizon">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item mx-md-2 mx-sm-2">  
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2 mx-sm-2">
                        <a href="#" class="nav-link">Travel Packages</a>
                    </li>
                    <li class="nav-item dropdown mx-md-2 mx-sm-2">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Link</a>
                            <a href="" class="dropdown-item">Link</a>
                            <a href="" class="dropdown-item">Link</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2 mx-sm-2">
                        <a href="#" class="nav-link">Testimonials</a>
                    </li>
                </ul>

                @guest
                <!-- Mobile Button -->
                <form action="" class="form-inline d-sm-block d-md-none mx-2 my-2">
                    <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        Login
                    </button>
                </form>

                <!-- Tab Button -->
                <form action="" class="form-inline d-none d-md-block d-lg-none mx-2 my-2">
                    <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        Login
                    </button>
                </form>

                <!-- Desktop Button -->
                <form action="" class="form-inline my-2 my-lg-0 d-none d-lg-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        Login
                    </button> 
                </form>
                @endguest

                @auth
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none mx-2 my-2" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">
                        Log out
                    </button>
                </form>

                <!-- Tab Button -->
                <form class="form-inline d-none d-md-block d-lg-none mx-2 my-2" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">
                        Log out
                    </button>
                </form>

                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-lg-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Log out
                    </button>
                </form>
                @endauth
            </div>
        </nav>
    </div>
</div>