<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $blogcategories = BlogCategory::inRandomOrder()->first();
        $users = DB::table('users')->whereNot('name' ,'=' , 'Admin')->inRandomOrder()->first();
        $titile = $this->faker->sentence(6);
        return [
            'blogcat_id' => $blogcategories->id,
            'user_id' =>$users->id,
            'post_titile' =>$titile,
            'post_slug' =>Str::slug($titile , '-'),
            'post_image' =>fake()->imageUrl(),
            'short_descp' =>fake()->paragraph(1),
            'long_descp' =>fake()->paragraph(3),
        ];
    }
}
