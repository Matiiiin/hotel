<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        BlogCategory::factory(5)->create();
        function persianSlug($string) {
            // Convert spaces to dashes
            $slug = preg_replace('/\s+/u', '-', trim($string));

            // Remove any non-word characters except dashes
            $slug = preg_replace('/[^\p{L}\p{N}-]+/u', '', $slug);

            // Convert to lowercase (optional for Persian)
            return mb_strtolower($slug, 'UTF-8');
        }

        $categoryname = 'رزرو و پذیرش';
        $categoryname2 = 'مدیریت مالی هتل';
        $categoryname3 = 'گردشگری و سفر';
        $categoryname4 = 'مدیریت هتل';
        $categoryname5 = 'تجهیزات هتلداری';
        BlogCategory::insert([
            [
                'category_name' => $categoryname,
                'category_slug' => persianSlug($categoryname),
            ],
            [
                'category_name' => $categoryname2,
                'category_slug' => persianSlug($categoryname2)
            ],
            [
                'category_name' => $categoryname3,
                'category_slug' => persianSlug($categoryname3)
            ],
            [
                'category_name' => $categoryname4,
                'category_slug' => persianSlug($categoryname4)
            ],
            [
                'category_name' => $categoryname5,
                'category_slug' => persianSlug($categoryname5)
            ],
        ]);
    }
}
