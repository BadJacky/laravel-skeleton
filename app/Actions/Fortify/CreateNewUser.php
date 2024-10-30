<?php

declare(strict_types=1);

namespace App\Actions\Fortify;

use App\Models\User;
use App\Traits\HasCreateTeam;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Throwable;

class CreateNewUser implements CreatesNewUsers
{
    use HasCreateTeam;
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     *
     * @throws Throwable
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'first_name'  => ['required', 'string', 'max:255'],
            'last_name'   => ['required', 'string', 'max:255'],
            'first_alias' => ['sometimes', 'nullable', 'required_with:last_alias', 'string', 'max:255'],
            'last_alias'  => ['sometimes', 'nullable', 'required_with:first_alias', 'string', 'max:255'],
            'email'       => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->whereNull('deleted_at')],
            'phone'       => ['sometimes', 'string', 'phone:US,CN,JP'],
            'password'    => $this->passwordRules(),
            'terms'       => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ], [
            'phone.phone' => trans('validation.messages.phone.phone'),
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'first_name'  => data_get($input, 'first_name'),
                'last_name'   => data_get($input, 'last_name'),
                'first_alias' => data_get($input, 'first_alias'),
                'last_alias'  => data_get($input, 'last_alias'),
                'email'       => data_get($input, 'email'),
                'phone'       => data_get($input, 'phone'),
                'password'    => Hash::make(data_get($input, 'password')),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }
}
