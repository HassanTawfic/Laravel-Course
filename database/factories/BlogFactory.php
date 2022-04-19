<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class BlogFactory extends Factory
{

    protected $model= Blog::class;

    public function definition()
    {
        return [
            'title' => $this->faker->realText(20),
            'description' => $this->faker->paragraph,
            'created_at' => now(),
            'user_id' => rand(1,10),
        ];
    }
}
