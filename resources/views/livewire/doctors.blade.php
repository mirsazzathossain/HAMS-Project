@include('breadcrumbs', ['route' => 'Doctors'])
<section class="doctors section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Doctors</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">{{$hospital['doctors_page_heading']}}</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">{{$hospital['doctors_page_details']}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($doctors as $doctor)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                    <div class="image">
                        <img src="{{ asset('images/'.$doctor['profile_photo_path']) }}" alt="#">
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
