<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Room;
use App\Models\RoomNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingRoomList>
 */
class BookingRoomListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $booking = Booking::all()->random();
        $room = Room::all()->random();
        $roomnumber = RoomNumber::all()->random();
        return [
            'booking_id'=>$booking->id,
            'room_id'=>$room->id,
            'room_number_id'=>$roomnumber->id,
        ];
    }
}
