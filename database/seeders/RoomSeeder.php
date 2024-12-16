<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomNumber;
use App\Models\RoomType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Room::factory(50)->create();
//        for ($i=0 ; $i<6 ;$i++){
//            $roomtype = RoomType::all()->random();
//            $adult = array_rand([1,2,3,4,5,6]);
//            $child = array_rand([1,2,3,4,5,6]);
//            $room_capacity = $adult + $child;
$bed_style = ['تک نفره', 'دو نفره', 'سایز بزرگ', 'سایز کوجک'];
        Room::create([
            'name' => 'بهشت',
            'roomtype_id' => 1,
            'total_adult' => 3,
            'total_child' => 2,
            'room_capacity' => 5,
            'image' => '1.jpg',
            'price' => 500,
            'size' => 20,
            'view' => 'دریا',
            'bed_style' => $bed_style[array_rand($bed_style)],
            'discount' => 10,
            'short_desc' => 'اقامتی لوکس و فراموش‌نشدنی در کنار دریا',
            'description' => 'این ویلا با طراحی مدرن و منظره‌ای بی‌نظیر از دریا، محیطی آرام و دلپذیر را برای شما فراهم می‌کند. مناسب برای یک اقامت خاطره‌انگیز و آرامش‌بخش',
            'status' => 1,
        ]);


        Room::create([
            'name' => 'هرمز',
            'roomtype_id' => 2,
            'total_adult' => 6,
            'total_child' => 1,
            'room_capacity' => 7,
            'image' => '2.jpg',
            'price' => 450,
            'size' => 30,
            'view' => 'مرکز شهر',
            'bed_style' => $bed_style[array_rand($bed_style)],
            'discount' => 20,
            'short_desc' => 'راحتی و زیبایی در قلب شهر',
            'description' => 'این اتاق بزرگ و دنج، با چشم‌اندازی به مرکز شهر، محیطی مناسب برای اقامتی راحت و لذت‌بخش فراهم می‌کند. با امکانات مدرن و فضایی دلپذیر، تجربه‌ای به یاد ماندنی برای شما رقم می‌زند',
            'status' => 1,
        ]);


        Room::create([
            'name' => 'اطلس',
            'roomtype_id' => 3,
            'total_adult' => 2,
            'total_child' => 0,
            'room_capacity' => 2,
            'image' => '3.jpg',
            'price' => 200,
            'size' => 10,
            'view' => 'کوهستان',
            'bed_style' => $bed_style[array_rand($bed_style)],
            'discount' => 0,
            'short_desc' => 'آرامش و راحتی در دل طبیعت',
            'description' => 'این اتاق کوچک و دنج با منظره‌ای زیبا از کوهستان، انتخابی ایده‌آل برای زوج‌هاست. با امکانات مناسب و فضایی آرام، اقامتی دلنشین و به‌یادماندنی را برای شما فراهم می‌کند. مناسب برای کسانی که به دنبال فرار از شلوغی و استراحت در طبیعت هستند',
            'status' => 1,
        ]);


        Room::create([
            'name' => 'آسمان',
            'roomtype_id' => 4,
            'total_adult' => 6,
            'total_child' => 2,
            'room_capacity' => 8,
            'image' => '4.jpg',
            'price' => 350,
            'size' => 15,
            'view' => 'رودخانه',
            'bed_style' => $bed_style[array_rand($bed_style)],
            'discount' => 5,
            'short_desc' => 'آرامش و زیبایی در کنار رودخانه',
            'description' => 'این اتاق بزرگ با تراسی زیبا و منظره‌ای رو به رودخانه، فضایی ایده‌آل برای خانواده‌ها و گروه‌های بزرگ فراهم می‌کند. با امکانات مدرن و محیطی دلنشین، اقامتی راحت و به‌یادماندنی را برای شما به ارمغان خواهد آورد',
            'status' => 1,
        ]);


        Room::create([
            'name' => 'پارسیان',
            'roomtype_id' => 5,
            'total_adult' => 2,
            'total_child' => 1,
            'room_capacity' => 3,
            'image' => '5.jpg',
            'price' => 265,
            'size' => 23,
            'view' => 'جنگل',
            'bed_style' => $bed_style[array_rand($bed_style)],
            'discount' => 5,
            'short_desc' => 'اقامتی دنج و دلنشین در قلب طبیعت',
            'description' => 'این اتاق با نمایی زیبا به جنگل و فضایی دنج و آرام، گزینه‌ای عالی برای زوج‌ها و خانواده‌های کوچک است. محیطی دلپذیر و امکانات مدرن، تجربه‌ای به یادماندنی و آرامش‌بخش را برای شما فراهم می‌کند',
            'status' => 1,
        ]);


        }
}
