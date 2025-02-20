<?php

namespace App\Policies;

use App\Models\User;
use App\Models\student;
use Illuminate\Auth\Access\Response;

class StudentPolicy
{
    public function edit(User $user, student $student): bool{
        return $student->user() -> is($user);
    }
}
