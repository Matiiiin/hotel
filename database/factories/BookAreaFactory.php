<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookArea>
 */
class BookAreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image'=>fake()->imageUrl(),
            'short_title'=>fake()->sentence(3),
            'main_title'=>fake()->sentence(6),
            'short_desc'=>fake()->paragraph(3),
//            'link_url'=>,
        ];
    }
}
