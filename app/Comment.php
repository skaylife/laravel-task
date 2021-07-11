<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = ['subject', 'body', 'article_id'];

    // Комментарии к одной статье
    public function article() {
        return $this->belongsToMany(Article::class);
    }
}
