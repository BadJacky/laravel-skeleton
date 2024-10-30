<?php

declare(strict_types=1);

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, mixed>  $input
     *
     * @throws ValidationException
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'first_name'  => ['required', 'string', 'max:255'],
            'last_name'   => ['required', 'string', 'max:255'],
            'first_alias' => ['sometimes', 'nullable', 'required_with:last_alias', 'string', 'max:255'],
            'last_alias'  => ['sometimes', 'nullable', 'required_with:first_alias', 'string', 'max:255'],
            'email'       => ['required', 'email', 'max:255', Rule::unique('users')->whereNull('deleted_at')->ignore($user->id)],
            'phone'       => ['sometimes', 'string', 'phone:US,CN,JP'],
            'photo'       => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ], [
            'phone.phone' => trans('validation.messages.phone.phone'),
        ])->validateWithBag('updateProfileInformation');

        if (data_get($input, 'photo') !== null) {
            $user->updateProfilePhoto(data_get($input, 'photo'));
        }

        if (data_get($input, 'email') !== $user->email && $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'first_name'  => data_get($input, 'first_name'),
                'last_name'   => data_get($input, 'last_name'),
                'first_alias' => data_get($input, 'first_alias'),
                'last_alias'  => data_get($input, 'last_alias'),
                'email'       => data_get($input, 'email'),
                'phone'       => data_get($input, 'phone'),
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'first_name'        => data_get($input, 'first_name'),
            'last_name'         => data_get($input, 'last_name'),
            'first_alias'       => data_get($input, 'first_alias'),
            'last_alias'        => data_get($input, 'last_alias'),
            'email'             => data_get($input, 'email'),
            'phone'             => data_get($input, 'phone'),
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
