<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $userRole = isset($user->role) ? $user->getRoles()[$user->role] : 'User';

        return view('admin.user.show', compact('user', 'userRole'));
    }
}
