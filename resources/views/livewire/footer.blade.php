<footer class="footer overlay">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-about">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                HAMS
                            </a>
                        </div>
                        <p>
                            {{$hospital['footer_about']}}
                        </p>
                        <ul class="social">
                            <li>
                                <a href="{{$hospital['social_links'][0]}}" class="line-height: 10 !important;">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$hospital['social_links'][1]}}"><i class="bi bi-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{$hospital['social_links'][2]}}"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{$hospital['social_links'][3]}}"><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="{{$hospital['social_links'][4]}}"><i class="bi bi-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h3>Useful Links</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="{{ route('doctors') }}">Doctor</a></li>
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                     <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('patient.book-appointment') }}">Book Appoinment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer opening-hours">
                        <h3>Opening Hours</h3>
                        <ul>
                            @foreach ($hospital['opening_hours'] as $schedule)
                            <li>
                                <span class="day"><i class="bi bi-clock" style="vertical-align: 3px;"></i> {{ explode(' ', $schedule)[0] }}</span>
                                <span class="time">{{ explode(' ', $schedule)[1] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer last f-contact">
                        <h3>Contact</h3>
                        <ul>
                            <li>
                                <i class="bi bi-geo-alt" style="line-height: 1px;"></i>
                                {{$hospital['address']}}
                            </li>
                            <li>
                                <i class="bi bi-telephone" style="line-height: 1px;"></i><a class="color" href="tel:{{$hospital['phone']}}">Tel:{{$hospital['phone']}}</a> 
                            </li>
                            <li>
                                <i class="bi bi-envelope" style="line-height: 1px;"></i> Mail.
                                <a href="mailto:{{$hospital['email']}}">{{$hospital['email']}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col">
                        <div class="content align-center">
                            <p class="copyright-text">
                                © {{ date("Y") }} All Rights Reserved.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</footer>