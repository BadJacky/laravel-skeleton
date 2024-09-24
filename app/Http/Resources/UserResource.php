<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin User
 */
class UserResource extends JsonResource
{
    protected bool $showSensitiveFields = false;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if (! $this->showSensitiveFields) {
            $this->makeHidden(['email', 'phone']);
        }

        return parent::toArray($request);
    }

    public function showSensitiveFields(): static
    {
        $this->showSensitiveFields = true;

        return $this;
    }
}
