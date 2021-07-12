<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) {
//            $table->id();

//            $table->foreign('article_id')->references('id')->on('articles');
//            $table->unsignedBigInteger('tags_id');
//            $table->foreign('tags_id')->references('id')->on('tags');

//            $table->foreignId('user_id')->constrained();

            $table->unsignedBigInteger('article_id')->unsigned()->index()->nullable();
            $table->unsignedBigInteger('tag_id')->unsigned()->index()->nullable();

            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('tag_id')->references('id')->on('tags');





//            $table->integer('category_id')->unsigned();
//            $table->foreign('category_id')->references('id')->on('categories');


//            $table->foreign('article_id')->constrained();
//            $table->foreign('tag_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tag');
    }
}
