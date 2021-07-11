<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $tags = \App\Tag::factory(10)->create();

        $articles = \App\Article::factory(20)->create();

        $tags_id = $tags->pluck('id');

        $articles->each(function ($article) use ($tags_id) {
            $article->tags()->attach($tags_id->random(3));
            \App\Comment::factory(3)->create([
               'article_id' => $article->id
            ]);

            \App\State::factory(1)->create([
                'article_id' => $article->id
            ]);


    });
    }
}
