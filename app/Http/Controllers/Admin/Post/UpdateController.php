<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        try {
            $data = $request->validated();
            $tagIds = $data['tags'] ?? [];
            unset($data['tagIds']);

            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            } else {
                $data['preview_image'] = $post->preview_image;
            }

            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            } else {
                $data['main_image'] = $post->main_image;
            }

            $post->update($data);
            $post->tags()->sync($tagIds);
        } catch (\Exception $exception) {
            abort(404);
        }

        return redirect()->route('admin.post.show', $post);
    }
}
