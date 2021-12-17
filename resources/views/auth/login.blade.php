<x-app-layout>
    @include('breadcrumbs', ['route' => 'Login'])
    <section class="login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">

                        <h4 class="title">Login To Your Account</h4>
                        
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input id="email" name="email" type="email" placeholder="Email" :value="old('email')" required autofocus>
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                            </div>

                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1 remember_me" name="remember">
                                            <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-12">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="lost-pass">{{ __('Forgot your password?') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="button">
                                <button type="submit" class="btn">Login Now</button>
                            </div>

                            <p class="outer-link">Don't have an account? <a href="{{ route('register') }}">{{ __('Register here') }}</a></p>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>