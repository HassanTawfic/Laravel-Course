<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        $commentable = $this->commentable();
        return [
            'comment' => $this->faker->paragraph,
            'commentable_id' => Blog::factory(),
            'commentable_type' => $commentable,
        ];
    }

    public function commentable()
    {
        return $this->faker->randomElement([
            Blog::class,
        ]);
    }
}
