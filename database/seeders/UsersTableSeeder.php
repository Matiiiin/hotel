<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            // Admin
            [
                'name' => 'ادمین',
                'email' => 'admin@admin.com',
                'password' => Hash::make('111'),
                'phone' =>'09019972235',
                'photo' => '202307092044avatar-1.png',
                'address' => 'اصفهان',
                'role' => 'admin',
                'status' => 'active',
            ],

            // User

            [
                'name' => 'کاربر',
                'email' => 'user@user.com',
                'password' => Hash::make('111'),
                'phone' =>'0123456789',
                'photo'=>'202305292149avatar-5.png',
                'address'=>'اصفهان',
                'role' => 'user',
                'status' => 'active',
            ],

        ]);
        $admin = User::where('email' , 'admin@admin.com')->first();
        $admin->assignRole('admin');
        User::factory(10)->create();
    }
}
