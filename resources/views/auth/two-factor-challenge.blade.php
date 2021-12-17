<x-app-layout>
    @include('breadcrumbs', ['route' => 'Two Factor Authentication'])
    <section class="login registration section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">
                        <h4 class="title">Two Factor Authentication</h4>

                        <div x-data="{ recovery: false }">
                            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                            </div>

                            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                            </div>

                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('two-factor.login') }}">
                                @csrf


                                <div class="form-group" x-show="! recovery">
                                    <input id="code" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" placeholder="Code">
                                </div>

                                <div class="form-group" x-show="recovery">
                                    <input id="recovery_code" class="form-group" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" placeholder="Recovery Code">
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button type="button" class="button text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                                    style="margin-right: 15px;"
                                                    x-show="! recovery"
                                                    x-on:click="
                                                        recovery = true;
                                                        $nextTick(() => { $refs.recovery_code.focus() })
                                                    ">
                                        {{ __('Use a recovery code') }}
                                    </button>

                                    <button type="button" class="button text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                                    style="margin-right: 15px;"
                                                    x-show="recovery"
                                                    x-on:click="
                                                        recovery = false;
                                                        $nextTick(() => { $refs.code.focus() })
                                                    ">
                                        {{ __('Use an authentication code') }}
                                    </button>

                                    <div class="button">
                                        <button type="submit" class="btn">Log in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
