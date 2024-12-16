<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'logo'=> '/frontend/assets/img/logos/logo-1.png',
            'phone'=>'09019972235',
            'address'=> 'اصفهان ایران',
            'email'=> 'matinnjt2000@gmail.com',
            'facebook'=>'facebook.com',
            'twitter'=>'x.com',
            'copyright'=>'تمامی حقوق محفوض است'
        ]);
    }
}
