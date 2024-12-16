<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $faker = Faker::create('fa_IR'); // Create a Faker instance for Persian (fa_IR)
        $payment_method = ['نقدی'];
        $room = Room::all()->random();
        $user = DB::table('users')->whereNot('name' ,'=' , 'Admin')->inRandomOrder()->first();
        $actual_price =fake()->numberBetween(100 , 500);
        $discount =fake()->numberBetween(10 , 50);
        $subtotal = $actual_price - $discount;
        $person = fake()->numberBetween(1 , 10);
        return [
            'rooms_id'=>$room->id,
            'user_id'=>$user->id,
            'check_in'=>fake()->date(),
            'check_out'=>fake()->date(),
            'persion'=>$person,
            'number_of_rooms'=>fake()->numberBetween(2 , 5),
            'total_night'=>fake()->numberBetween(2 , 10),
            'actual_price'=>fake()->numberBetween(100 , 500),
            'subtotal'=>$subtotal,
            'discount'=>$discount,
            'total_price'=>$subtotal,
            'payment_method'=>fake()->randomElement($payment_method),
            'transation_id'=>fake()->numberBetween(1 , 50),
            'payment_status'=>fake()->randomElement([0 , 1]),
            'name'=>$user->name,
            'email'=>$user->email,
            'phone'=>$user->phone,
            'country'=>fake()->country,
            'state'=>fake()->city,
            'zip_code'=>fake()->postcode,
            'address'=>$user->address,
            'code'=>fake()->postcode,
            'status'=>fake()->randomElement([0, 1]),
        ];
    }
}
