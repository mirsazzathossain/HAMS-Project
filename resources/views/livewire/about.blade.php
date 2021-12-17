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
                    <h2>Thousands of specialities for any type diagnostic.</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eius mod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi aliquip ex ea commodo consequat.
                    </p>
                    <div class="button">
                        <a href="{{ route('contact') }}" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>