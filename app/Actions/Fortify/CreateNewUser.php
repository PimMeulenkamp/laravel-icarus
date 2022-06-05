<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use App\Models\UserAddress;
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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input) : User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'street' => ['required', 'string', 'max:255'],
            'street_number' => ['required', 'string', 'regex:/[0-9]{1,3}/'],
            'zipcode' => ['required', 'string', 'regex:/[0-9]{4}[a-z,A-Z]{2}]/'],
            'city' => ['required', 'string', 'regex:/(oldenzaal)/'],
            'mobile' => ['required', 'string', 'regex:/(06)[0-9]{8}/'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user =  User::create([
            'name' => implode(' ', array_map(function ($data) {
                return ucfirst(strtolower($data));
            }, explode(' ', $input['name']))),
            'email' => strtolower($input['email']),
            'password' => Hash::make($input['password']),
            'role_id' => Role::$ROLE_USER
        ]);

        UserAddress::create([
            'user_id' => $user->id,
            'city' => ucfirst(strtolower($input['city'])),
            'street' => strtolower($input['street']),
            'street_number' => $input['street_number'],
            'zipcode' => strtoupper($input['zipcode'])
        ]);

        return $user;
    }
}
