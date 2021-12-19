<header class="header navbar-area style2">
    <div class="top-bar">
        <div class="container">
            <div class="inner-topbar">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="top-contact">
                            <ul>
                                <li>
                                    <i class="bi bi-envelope" style="vertical-align: 2px;"></i>
                                    <a href="mailto:mail@gmail.com">test@gmail.com</a>
                                </li>
                                <li>
                                    <i class="bi bi-telephone" style="vertical-align: 2px;"></i> 
                                    <a class="color" href="tel:+880 140000-0000">Tel: +880 1234-56</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="right-content">
                            <div class="top-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="bi bi-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            HAMS
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="{{ request()->is('/') ? 'active':'' }}" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ request()->is('doctors') ? 'active':'' }}" href="{{ route('doctors') }}">Doctors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ request()->is('about-us') ? 'active':'' }}" href="{{ route('about-us') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ request()->is('contact') ? 'active':'' }}" href="{{ route('contact') }}">Contact</a>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item">
                                            <a class="{{ request()->is('patient.appointments') ? 'active':'' }}" href="{{ route('patient.appointments') }}">Appointments</a>
                                        </li>
                                        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'doctor')
                                            <li class="nav-item">
                                                <a class="{{ request()->is('dashboard') ? 'active':'' }}" href="{{ route('dashboard') }}">Dashboard</a>
                                            </li>
                                        @endif
                                        <li class="nav-item">
                                            <a class="{{ request()->is('profile.show') ? 'active':'' }}" href="{{ route('profile.show') }}">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit(); " role="button">
                                                    {{ __('Log Out') }}
                                                </a>
                                            </form>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a class="{{ request()->is('login') ? 'active':'' }}" href="{{ route('login') }}">Login</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="{{ request()->is('register') ? 'active':'' }}" href="{{ route('register') }}">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                        <div class="button add-list-button">
                            <a href="{{ route('patient.book-appointment') }}" class="btn">Book Appointment</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>