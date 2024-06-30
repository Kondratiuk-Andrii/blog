<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [
            'posts' => Post::paginate(6),
            'randomPosts' => Post::get()->random(4),
            'topLikedPosts' => Post::withCount('likes')->orderBy('likes_count', 'desc')->take(4)->get(),
        ];

        return view('main.index', compact('data'));
    }
}
