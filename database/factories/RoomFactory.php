<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomtype = RoomType::all()->random();
        $adult = $this->faker->randomDigit;
        $child = $this->faker->randomDigit;
        $room_capacity = $adult + $child;
        return [
            'name'=>fake()->unique()->word,
            'roomtype_id' => $roomtype->id,
            'total_adult' => $adult,
            'total_child' => $child,
            'room_capacity' => $room_capacity,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'size' => $this->faker->randomNumber(),
            'view' => $this->faker->word,
            'bed_style' => $this->faker->randomElement(['single', 'double', 'queen', 'king']),
            'discount' => $this->faker->randomFloat(2, 0, 50),
            'short_desc' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => fake()->randomElement([0,1]),
        ];
    }
}
