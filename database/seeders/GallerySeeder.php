<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Gallery::factory(60)->create();
        for ($i = 1 ; $i<=24 ;$i++){
            Gallery::create([
                'photo_name'=>'upload/gallery/pic ('.$i.')'.'.jpg'
            ]);
        }
    }
}
