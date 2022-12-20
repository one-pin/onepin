<?php

namespace App\Actions\User;

use App\Models\User;

interface AuthenticateUserInterface
{
    public function authenticate(User $user);
}
