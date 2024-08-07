<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(5)->create();
        $tags = Tag::factory(5)->create();
        $posts = Post::factory(15)->create();

        foreach ($posts as $post) {
            $tagsIds = $tags->random(rand(0, 5))->pluck('id')->toArray();
            $post->tags()->attach($tagsIds);
        }
    }
}
