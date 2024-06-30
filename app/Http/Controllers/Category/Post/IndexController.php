<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
        //        dd($category->posts());
        $data = [
            'posts' => $category->posts()->paginate(6),
            'randomPosts' => Post::get()->random(4),
            'topLikedPosts' => Post::withCount('likes')->orderBy('likes_count', 'desc')->take(4)->get(),
        ];

        return view('category.post.index', compact('data'));
    }
}
