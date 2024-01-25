<x-guest-layout>
    <link rel="stylesheet" href="CSS/rac.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <x-authentication-card> --}}
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        <x-validation-errors class="mb-4" />

        <div class="wrapper">
            <div class="login_box">
                <div class="login-header">
                    <span>Register</span>
                </div>

                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="input_box">
                        <input class="input-field" type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                        <label class="label" for="name">Name</label>
                        <i class='bx bx-user icon'></i>
                    </div>

                    <div class="input_box">
                        <input class="input-field" type="email" id="email" name="email" :value="old('email')" required autocomplete="username">
                        <label class="label" for="email">Email</label>
                        <i class='bx bx-envelope icon'></i>
                    </div>

                    <div class="input_box">
                        <input class="input-field" type="number" id="Phone" name="phone" :value="old('phone')" required autocomplete="phone">
                        <label class="label" for="Phone">Phone</label>
                        <i class='bx bx-phone icon'></i>
                    </div>

                    <div class="input_box">
                        <input class="input-field" type="text" id="address" name="address" :value="old('address')" required autocomplete="address">
                        <label class="label" for="address">Address</label>
                        <i class='bx bx-home icon'></i>
                    </div>

                    <div class="input_box">
                        <input class="input-field" type="password" id="password" name="password" required autocomplete="new-password">
                        <label class="label" for="password">Password</label>
                        <i class='bx bx-lock-alt icon'></i>
                    </div>

                    <div class="input_box">
                        <input class="input-field" type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                        <label class="label" for="password_confirmation">Confirm Password</label>
                        <i class='bx bx-lock-alt icon'></i>
                    </div>

                    {{-- <div class="input_box">
                        <input class="input-field" type="file" id="image" name="image" accept="image/*">
                        <label class="label" for="image">Profile Image</label>
                        <i class='bx bx-camera icon'></i>
                    </div> --}}
                    <div class="input_box">
                        <label class="blue" for="profile_photo_path">Car Image:</label>
                        <input class="blue" type="file" id="profile_photo_path" name="profile_photo_path" accept="profile_photo_path/*">
                    </div>
                    

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-white-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    {{-- </x-authentication-card> --}}
</x-guest-layout>
