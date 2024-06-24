<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    protected static array $tags = [
        'technology',
        'health',
        'science',
        'education',
        'business',
        'sports',
        'lifestyle',
        'travel',
        'food',
        'music',
        'politics',
        'finance',
        'environment',
        'culture',
        'history',
        'philosophy',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->randomElement(self::$tags),
        ];
    }
}
