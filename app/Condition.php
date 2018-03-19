<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
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
