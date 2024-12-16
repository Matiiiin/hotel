<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $room_ids = range(1, 5);
        $facility_names = [
            'صبحانه',
            'تلویزیون',
            'هشدار حریق',
            'میز کار',
            'وای فای رایگان',
            'جعبه کمک های اولیه',
            'دمپایی',
            'سشوار',
            'لباسشویی',
            'قفل الکترونیکی در',
        ];

// Optionally, you can insert this array into your database or use it in your application

        foreach ($room_ids as $room_id) {
            foreach ($facility_names as $facility_name) {
                Facility::create([
                    'rooms_id' => $room_id,
                    'facility_name' => $facility_name,
                ]);
            }
        }
    }
}
