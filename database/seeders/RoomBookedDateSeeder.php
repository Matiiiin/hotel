<?php

namespace Database\Seeders;

use App\Models\RoomBookedDate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomBookedDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomBookedDate::factory(50)->create();
    }
}
