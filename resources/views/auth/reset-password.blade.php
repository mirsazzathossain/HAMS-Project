<x-app-layout>
    @include('breadcrumbs', ['route' => 'Reset Password'])
    <section class="login registration section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">
                        <h4 class="title">Reset Password</h4>

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <input id="email" name="email" type="email" placeholder="Email" :value="old('email', $request->email)" required>
                            </div>

                            <div class="form-group">
                                <input id="password" name="password" type="password" placeholder="Password" required autocomplete="new-password">
                            </div>
                            
                            <div class="form-group">
                                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>

                            <div class="button">
                                <button type="submit" class="btn">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
