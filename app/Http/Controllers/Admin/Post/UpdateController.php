<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        //        dd($data);
        $post = $this->service->update($post, $data);

        return redirect()->route('admin.post.show', $post);
    }
}
