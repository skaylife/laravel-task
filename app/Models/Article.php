<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug'];

//    protected $quarded = [];

    // Комментарии - один к многим
    public  function  comments() {
        return $this->hasMany(Comment::class);
    }

    // Статистика один к одному
    public function state() {
        return $this->hasOne(State::class);
    }

    // Таги многие ко многим
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
