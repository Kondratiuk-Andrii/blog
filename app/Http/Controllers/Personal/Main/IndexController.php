<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $likedPostsCount = $user->likedPosts->count();
        $commentsCount = $user->comments->count();

        return view('personal.main.index', compact('likedPostsCount', 'commentsCount'));
    }
}
