<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'profile_photo_path' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // if (array_key_exists('image', $input)) {
        //     $imagePath = $input['image']->store('profilepics', 'public');
        //     $input['profile_photo_path'] = $imagePath;
        // }
        // if (array_key_exists('image', $input)) {
        //     $imageName = time().'.'.$input['image']->extension();
        //     $input['image']->move(public_path('profilepics'), $imageName);
        //     // $input['profile_photo_path'] = 'profilepics/' . $imageName;
        // }

        $imageName = null;

        if (array_key_exists('profile_photo_path', $input)) {
            $imageName = time().'.'.$input['profile_photo_path']->extension();
            $input['profile_photo_path']->move(public_path('profilepics'), $imageName);
        }


        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'password' => Hash::make($input['password']),
            'profile_photo_path' => $imageName,
        ]);
    }
}
