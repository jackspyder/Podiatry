<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Post extends Model
{
    use Resizable;

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
