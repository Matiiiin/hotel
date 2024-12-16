<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomNumber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomNumber::factory(30)->create();
    }
}
