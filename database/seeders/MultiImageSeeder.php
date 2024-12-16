<?php

namespace Database\Seeders;

use App\Models\MultiImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MultiImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        MultiImage::create([
            'rooms_id' => 1,
            'multi_img' => '11.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 1,
            'multi_img' => '12.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 1,
            'multi_img' => '13.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 2,
            'multi_img' => '21.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 2,
            'multi_img' => '22.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 2,
            'multi_img' => '23.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 3,
            'multi_img' => '31.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 3,
            'multi_img' => '32.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 3,
            'multi_img' => '33.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 4,
            'multi_img' => '41.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 4,
            'multi_img' => '42.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 4,
            'multi_img' => '43.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 5,
            'multi_img' => '51.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 5,
            'multi_img' => '52.jpg',
        ]);
        MultiImage::create([
            'rooms_id' => 5,
            'multi_img' => '53.jpg',
        ]);



    }
}
