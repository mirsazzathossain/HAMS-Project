<section class="hero-area style2">
    <div class="hero-slider">
        <div class="single-slider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="hero-text wow fadeInLeft" data-wow-delay=".3s">

                            <div class="section-heading">
                                <h2 class="wow fadeInLeft" data-wow-delay=".3s">{{explode('&', $hospital['hero_heading'])[0].'&'}} <br>{{explode('&', $hospital['hero_heading'])[1]}}
                                </h2>
                                <p class="wow fadeInLeft" data-wow-delay=".5s">
                                    {{$hospital['hero_details']}}
                                </p>
                                <div class="button wow fadeInLeft" data-wow-delay=".7s">
                                    <a href="{{route('patient.book-appointment')}}" class="btn">Book Appointment</a>
                                    <a href="{{ route('about-us') }}" class="btn alt">About Us</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="hero-image wow fadeInRight" data-wow-delay=".5s">
                            <img src="{{ asset('images/02.png') }}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-works">
    <div class="container-fluid">
        <div class="row">
            @for ($x = 0; $x < 3; $x++) 
                <div class="col-lg-4 col-md-4 col-12 p-0">
                    <div class="single-work {{$color[$x]}}">
                        <div class="main-icon">
                            <i class="bi {{$icon[$x]}}"></i>
                        </div>
                        <h3>{{$hospital['home_service_heading'][$x]}}</h3>
                        <p>
                            {{$hospital['home_service_details'][$x]}}
                        </p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="doctors section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Doctors</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        {{$hospital['home_team_heading']}}
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        {{$hospital['home_team_details']}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($doctors as $doctor)

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <img src="{{ asset('images/'.$doctor['profile_photo_path']) }}" alt="{{$doctor['name']}}" />
                            <ul class="social">
                                <li>
                                    <a target="blank" href="{{$doctor['social_links'][0]}}"><i class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="blank" href="{{$doctor['social_links'][1]}}"><i class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a target="blank" href="{{$doctor['social_links'][2]}}"><i class="bi bi-instagram"></i></a>
                                </li>
                                <li>
                                    <a target="blank" href="{{$doctor['social_links'][3]}}"><i class="bi bi-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>{{$doctor['doctor_profession']}}</h5>
                            <h3><a href="{{route('doctor.details', $doctor['id'])}}">Dr.{{$doctor['name']}}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>