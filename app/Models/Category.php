<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function active()
    {
        return static::where('status', 1)->get();
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
