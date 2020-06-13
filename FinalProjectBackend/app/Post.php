<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'cat_id', 'name', 'img_url', 'post_title', 'post_description', 'created_at'
    ];

}
