<x-app-layout>
    @include('breadcrumbs', ['route' => 'Verify Email'])
    <section class="login registration section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">
                        <h4 class="title">Verify Your Email</h4>

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="mt-4 flex items-center justify-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div class="button">
                                    <button type="submit" class="btn">Resend Verification Email</button>
                                </div>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                
                                <div class="button">
                                    <button type="submit" class="btn">Log Out</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
