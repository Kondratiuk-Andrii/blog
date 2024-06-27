<?php

namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function index($data)
    {
        // TODO: Implement index() method.
    }

    public function store($data)
    {
        try {
            DB::beginTransaction();
            $tagIds = $data['tagIds'] ?? [];
            unset($data['tagIds']);

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

            $post = Post::create($data);
            $post->tags()->attach($tagIds);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update(Post $post, $data)
    {
        try {
            DB::beginTransaction();
            $tagIds = $data['tagIds'] ?? [];
            unset($data['tagIds']);

            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }


            $post->update($data);
            $post->tags()->sync($tagIds);
            DB::commit();
            return $post;
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }
}
