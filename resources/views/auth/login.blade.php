<x-guest-layout>
    <link rel="stylesheet" href="CSS/rac.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        <x-validation-errors class="mb-4" />

        <div class="wrapper">
            <div class="login_box">
                <div class="login-header">
                    <span>Login</span>
                </div>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input_box">
                        <input class="input-field" type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        <label class="label" for="email">Email</label>
                        <i class='bx bx-user icon'></i>
                    </div>

                    <div class="input_box">
                        <input class="input-field" type="password" id="password" name="password" required autocomplete="current-password">
                        <label class="label" for="password">Password</label>
                        <i class='bx bx-lock-alt icon'></i>
                    </div>

                    {{-- <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm blue">{{ __('Remember me') }}</span>
                        </label>
                    </div> --}}

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <a class="underline text-sm text-white-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-4" href="{{ route('register') }}">
                            {{ __('New comer?') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    {{-- </x-authentication-card> --}}
</x-guest-layout>
