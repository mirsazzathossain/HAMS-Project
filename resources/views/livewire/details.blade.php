@include('breadcrumbs', ['route' => 'Doctor Details'])
<section class="doctor-details section">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-12">
                    @foreach ($doctors as $doctor)
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="image">
                                <img src="{{ asset('images/'.$doctor['profile_photo_path']) }}" alt="{{$doctor['name']}}">
                            </div>


                            <div class="doctor-left-bar">

                                <div class="single-bar">
                                    <h4>Specialty</h4>
                                    <p>{{$doctor['doctor_speciality']}}</p>
                                </div>


                                <div class="single-bar">
                                    <h4>Conditions</h4>
                                    <p>{{$doctor['doctor_conditions']}}</p>
                                </div>


                                <div class="single-bar">
                                    <h4>Memberships</h4>
                                    <ul class="list">
                                        @foreach ($doctor['doctor_memberships'] as $membership)
                                        <li><a href="javascript:void(0)">{{$membership}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>


                                <div class="single-bar">
                                    <h4>Doctor Schedule</h4>
                                    <ul class="opening-hour">
                                        @foreach ($doctor['doctor_schedule'] as $schedule)
                                            <li>
                                                <span class="day"><i class="bi bi-clock"></i> {{ explode(' ', $schedule)[0] }}</span>
                                                <span class="time">{{ explode(' ', $schedule)[1] }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-8 col-md-8 col-12">

                            <div class="content">   
                                <h3 class="name">Dr. {{$doctor['name']}}
                                    <span>{{$doctor['doctor_tagline']}}</span>
                                </h3>
                                <ul class="list-info">
                                    <li><span>Profession:</span> {{$doctor['doctor_profession']}}</li>
                                    <li><span>Experience:</span> {{$doctor['doctor_experience']}}</li>
                                    <li><span>Phone:</span> <a href="tel:{{$doctor['phone']}}">Tel:{{$doctor['phone']}}</a> </li>
                                    <li><span>Email:</span> <a class="" href="mailto:{{$doctor['email']}}" >{{$doctor["email"]}}</a> 
                                    </li>
                                    <li><span>Address:</span> {{$doctor['address']}}</li>
                                    <li>
                                        <ul class="social">
                                            <li><span>Follow On:</span></li>
                                            <li><a href="{{$doctor['social_links'][0]}}"><i class="bi bi-facebook"></i></a></li>
                                            <li><a href="{{$doctor['social_links'][1]}}"><i class="bi bi-twitter"></i></a></li>
                                            <li><a href="{{$doctor['social_links'][2]}}"><i class="bi bi-instagram"></i></a></li>
                                            <li><a href="{{$doctor['social_links'][3]}}"><i class="bi bi-linkedin"></i></a> </li>
                                            <li><a href="{{$doctor['social_links'][4]}}"><i class="bi bi-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <h4>Biography</h4>
                                <p>{{$doctor['doctor_biography']}}</p>
                                <h4>Education</h4>
                                <ul class="normal-list-info">
                                    @foreach ($doctor['doctor_education'] as $edu)
                                        <li>{{$edu}}</li>
                                    @endforeach
                                </ul>
                                <h4>Research interests</h4>
                                <p>{{$doctor['doctor_research_interests']}}</p>
                                <h4>Awards & Honours</h4>
                                <ul class="normal-list-info">
                                    @foreach ($doctor['doctor_awards'] as $award)
                                        <li>{{$award}}</li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>