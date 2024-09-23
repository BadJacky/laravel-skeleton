<?php

namespace App\Http\Requests;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Arr;

class AuthorizationRequest extends Request
{
    use PasswordValidationRules;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return match ($this->method()) {
            'POST' => [
                'username' => ['required', 'string'],
                'password' => Arr::except($this->passwordRules(), [array_search('confirmed', $this->passwordRules())]),
            ],
            default => [],
        };
    }
}
