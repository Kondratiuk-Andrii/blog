<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected static array $categories = [
        'Technology',
        'Health',
        'Science',
        'Education',
        'Business',
        'Entertainment',
        'Sports',
        'Lifestyle',
        'Travel',
        'Food',
        'Music',
        'Gaming',
        'Pets',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->randomElement(self::$categories),
        ];
    }
}
