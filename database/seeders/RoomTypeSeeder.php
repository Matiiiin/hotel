<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        RoomType::factory(5)->create();

        $names = [
            1 =>'بهشت' ,
            2 =>'هرمز' ,
            3 =>'اطلس' ,
            4 =>'آسمان' ,
            5 =>'پارسیان'
        ];
    foreach ($names as $name){
        RoomType::create([
            'name' => $name
        ]);
    }
    }
}
