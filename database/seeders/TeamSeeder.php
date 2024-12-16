<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'متین نجات بخش',
            'image' => 'matin.jpg',
            'postion' => 'توسعه دهنده و مدیر وبسایت',
            'facebook' => 'facebook.com',
            'linkedin' => 'www.linkedin.com/in/matin-nejatbakhsh',
            'instagram' => 'https://instagram.com/matinnejatbakhsh',
        ]);
    }
}
