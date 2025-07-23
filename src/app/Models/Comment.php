<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'author_name',
        'author_email',
        'content',
        'status',
        'post_id',
    ];

    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class, 'post_id');
    }
}
