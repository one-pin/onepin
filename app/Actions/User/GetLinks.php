<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Collection;

class GetLinks
{
    /**
     * Returns a link collection for user
     * @param User $user
     * @return Collection
     */
    public function get(User $user) : Collection
    {
        //TODO: to be implemented later on
        return new Collection([]);
    }

}
