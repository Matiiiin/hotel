<?php

namespace Database\Factories;

use App\Models\BlogPost;
use App\Models\User;
use FontLib\Table\Type\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = DB::table('users')->whereNot('name' ,'=' , 'Admin')->inRandomOrder()->first();
        $post = BlogPost::all()->random();
        return [
            'user_id' => $user->id,
            'post_id' => $post->id,
            'message' => fake()->words(20 , true),
            'status' => rand(0,1),
        ];
    }
}
