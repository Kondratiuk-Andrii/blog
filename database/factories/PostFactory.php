<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imagePaths = [
            'images/WorNl9pUlaAyhmUfhQgmei67og8mRYYHVdbILtgB.jpg',
            'images/WB5TgoOi2RituECVDZ8SkuMjyIFm4W136nOv13fJ.jpg',
            'images/Js84XhAFmKBzVvI1y8Fdw1YIT2WRnUP9C450u2OP.jpg',
            'images/MZ3tHFxaDb711FunxttOlnGdpvZplGb507YgMzSD.jpg',
        ];

        static $postId = 1;

        return [
            'title' => 'Post #' . $postId++,
            'content' => $this->faker->text(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'preview_image' => $this->faker->randomElement($imagePaths),
            'main_image' => $this->faker->randomElement($imagePaths),
        ];
    }
}
