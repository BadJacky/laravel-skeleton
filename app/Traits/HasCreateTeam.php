<?php

namespace App\Traits;

use App\Models\Team;
use App\Models\User;

trait HasCreateTeam
{
    /**
     * Create a personal team for the user.
     */
    protected function createTeam(User $user): void
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => $user->name."'s Team",
            'personal_team' => true,
        ]));
    }
}
