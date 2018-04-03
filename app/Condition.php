<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class Condition extends Model
{
    use Resizable;

    protected $fillable = [
        'id',
        'title',
        'what',
        'symptoms',
        'cause',
        'todo',
        'help',
        'treatment'
    ];

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }
}
