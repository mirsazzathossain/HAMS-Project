<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">{{ $route }}</h1>
                </div>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li><i class="bi bi-chevron-right"></i></li>
                    <li>{{ $route }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>