<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'title',
        'subtitle',
        'body'
    ];

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }
}
