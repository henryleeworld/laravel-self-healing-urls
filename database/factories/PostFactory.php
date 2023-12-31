<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'title' => $title = $this->faker->text(20),
            'content' => $this->faker->paragraphs(2, true),
            'slug' => str_replace([' ', '.'],'-', rtrim(strtolower($title), '.')),
        ];
    }
}
