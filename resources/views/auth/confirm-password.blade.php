<x-app-layout>
    @include('breadcrumbs', ['route' => 'Confirm Password'])
    <section class="login registration section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">
                        <h4 class="title">Confirm Your Password</h4>

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                        </div>

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            
                            <div class="form-group">
                                <input id="password" name="password" type="password" placeholder="Password" required autocomplete="current-password" autofocus>
                            </div>

                            <div class="button">
                                <button type="submit" class="btn">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
