<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\RoomNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $room = Room::all()->random();
        return [
            'rooms_id' => $room->id,
            'facility_name' => $this->faker->word(),
        ];
    }
}
