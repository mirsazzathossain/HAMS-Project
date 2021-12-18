<x-app-layout>
    @include('breadcrumbs', ['route' => 'Registration'])
    <section class="login registration section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">

                        <h4 class="title">Registration</h4>
                        
                        <x-jet-validation-errors class="mb-4" />

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <input id="name" name="name" type="text" placeholder="Name" :value="old('name')" required autofocus autocomplete="name">
                            </div>
                            
                            <div class="form-group">
                                <input id="email" name="email" type="email" placeholder="Email" :value="old('email')" required>
                            </div>

                            <div class="form-group">
                                <input id="phone" name="phone" type="tel" placeholder="Phone" :value="old('phone')" required>
                            </div>

                            <div class="form-group">
                                <input id="password" name="password" type="password" placeholder="Password" required autocomplete="new-password">
                            </div>
                            
                            <div class="form-group">
                                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="check-and-pass">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input type="checkbox" name="terms" class="form-check-input width-auto"
                                                    id="exampleCheck1 terms">
                                                <label for="terms" class="form-check-label">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="button">
                                <button type="submit" class="btn">Registration</button>
                            </div>
                            <p class="outer-link">{{ __('Already have an account? ') }} <a href="{{ route('login') }}">{{ __(' Login Now') }}</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>