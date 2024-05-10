    <x-guest-layout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="border: 1px solid #ccc; border-radius: 5px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; margin-top: 20px;">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-group">
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <!-- Password -->
                                <div class="form-group mt-4">
                                    <x-label for="password" :value="__('Password')" />
                                    <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <!-- Remember Me -->
                                <div class="form-group form-check mt-4">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                        <x-button class="ml-3" style="background-color: #007bff; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;">
                                            {{ __('Log in') }}
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>

    <style>
        /* Background color and padding */
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        /* Button hover effect */
        .btn:hover {
            background-color: #0056b3;
        }
    </style>