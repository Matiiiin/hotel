<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomNumber>
 */
class RoomNumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $room = Room::all()->random();
        $room_type = $room->type()->first();

        return [
            'rooms_id' => $room->id,
            'room_type_id' => $room_type->id,
            'room_no' => $this->faker->unique()->randomNumber(3),
            'status' => $this->faker->randomElement(['در دسترس', 'رزرو شده']),
        ];
    }
}
