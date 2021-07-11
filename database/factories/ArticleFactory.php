<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ArticleFactory extends Factory {

    protected $model = Article::class;

    public function definition() {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s=+/', '-', $title)), 0, -1);


        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'img' => 'https://coursecouponclub.com/wp-content/uploads/2021/06/4040472_e850_2.jpg',
            'created_at' => $this->faker-dateTimeBetween('-1 years'),
        ];
    }
}
