<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;


class CommentFactory extends Factory {
    protected $model = Comment::class;

    public function definition() {
        return [
            'subject' => $this->faker->sentence('3'),
            'body' => $this->faker->paragraph('3', false),
        ];
    }
}
