<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }
}
