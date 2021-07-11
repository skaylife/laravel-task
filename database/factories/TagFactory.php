<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

class TagFactory extends Factory {
    protected $model = Tag::class;

    public function definition() {
        return [
            'label' => $this->faker->word,
        ];
    }
}
