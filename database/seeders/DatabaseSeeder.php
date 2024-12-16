<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BlogCategory;
use App\Models\BookArea;
use App\Models\Booking;
use App\Models\RoomType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UsersTableSeeder::class,
            RoomTypeSeeder::class,
            BlogCategorySeeder::class,
            RoomSeeder::class,
            BookingSeeder::class,
            BlogPostSeeder::class,
            CommentSeeder::class,
            FacilitySeeder::class,
            RoomNumberSeeder::class,
            BookingRoomListSeeder::class,
            RoomBookedDateSeeder::class,
            ContactSeeder::class,
            BookAreaSeeder::class,
            GallerySeeder::class,
            SiteSettingSeeder::class,
            MultiImageSeeder::class,
            TeamSeeder::class,
            TestimonialsSeeder::class
        ]);
    }
}
