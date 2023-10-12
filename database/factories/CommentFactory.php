<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{

    protected $model = Comment::class;

    public function definition(): array
    {

        return [
            'body' => [],
            'user_id' => 1,
            'post_id' => 1
        ];
    }
}
