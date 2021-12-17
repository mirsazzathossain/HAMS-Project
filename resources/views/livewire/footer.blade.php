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
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <ul class="social">
                            <li>
                                <a href="#" class="line-height: 10 !important;">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-youtube"></i></a>
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
                                    <li><a href="#">Book Appoinment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer opening-hours">
                        <h3>Opening Hours</h3>
                        <ul>
                            <li>
                                <span class="day"><i class="bi bi-clock" style="vertical-align: 3px;"></i> Mon - Tue</span>
                                <span class="time">08:30 - 18:30</span>
                            </li>
                            <li>
                                <span class="day"><i class="bi bi-clock" style="vertical-align: 3px;"></i> Wed- Thu</span>
                                <span class="time">08:30 - 18:30</span>
                            </li>
                            <li>
                                <span class="day"><i class="bi bi-clock" style="vertical-align: 3px;"></i> Friday</span>
                                <span class="time">08:30 - 18:30</span>
                            </li>
                            <li>
                                <span class="day"><i class="bi bi-clock" style="vertical-align: 3px;"></i> Saturday</span>
                                <span class="time">08:30 - 18:30</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer last f-contact">
                        <h3>Contact</h3>
                        <ul>
                            <li>
                                <i class="bi bi-geo-alt" style="line-height: 1px;"></i>
                                Plot 16, Block B, Aftabuddin Ahmed Road, Bashundhara R/A, Dhaka-1212
                            </li>
                            <li>
                                <i class="bi bi-telephone" style="line-height: 1px;"></i><a class="color" href="tel:+880 1234-56">Tel:+880 1234-56</a> 
                            </li>
                            <li>
                                <i class="bi bi-envelope" style="line-height: 1px;"></i> Mail.
                                <a href="mailto:mail@gmail.com">test@gmail.com</a>
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