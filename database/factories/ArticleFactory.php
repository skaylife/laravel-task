<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    public function definition() {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s=+/', '-', $title)), 0, -1);

        // $slug = Str - pattern
        // "hello laravel new project."
        // "hello-laravel-new-project"

        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'img' => 'https://coursecouponclub.com/wp-content/uploads/2021/06/4040472_e850_2.jpg',
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
