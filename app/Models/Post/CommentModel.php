<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;

    protected $table = 'comment';

    public function post()
    {
        return $this->belongsTo('App\Models\Post\PostModel','posts_id','id');
    }
}
