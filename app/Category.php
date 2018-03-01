<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function getCategory()
    {
//        $a = Category::all();
//        $a->load('posts');
//
//        return $a;
//        return $this->posts();
    }
}
