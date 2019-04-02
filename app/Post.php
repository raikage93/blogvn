<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Post extends Model

{
    use Commentable;
    public function tags(){
        return $this->belongsToMany('App\Tag','post_tags')->withTimestamps();
    }
    public function categories(){
        return $this->belongsToMany('App\Category','category_posts')->withTimestamps();
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
