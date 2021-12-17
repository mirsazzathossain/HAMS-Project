<x-app-layout>
    @include('breadcrumbs', ['route' => 'Forgot Password'])
    <section class="login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">

                        <h4 class="title">Forgot your password?</h4>

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <input id="email" name="email" type="email" placeholder="Email" :value="old('email')" required autofocus>
                            </div>

                            <div class="button">
                                <button type="submit" class="btn">Email Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
