<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    protected $table = 'post';

    public function comments()
    {
        return $this->hasMany('App\Models\Post\CommentModel', 'posts_id', 'id');
    }
}
