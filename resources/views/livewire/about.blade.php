@include('breadcrumbs', ['route' => 'About Us'])
<section class="about-us section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="content-left wow fadeInLeft">
                    <img src="{{ asset('images/about.png') }}" alt="#" />
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="content-right">
                    <span class="sub-heading">About</span>
                    <h2>{{$hospital['about_page_heading']}}</h2>
                    <p>
                        {{$hospital['about_page_details']}}
                    </p>
                    <div class="button">
                        <a href="{{ route('contact') }}" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>