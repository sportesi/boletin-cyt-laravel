<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function active()
    {
        $categories = static::has('news')
            ->withCount('news')
            ->where('status', 1)
            ->orderBy('news_count', 'desc')
            ->get();

        return $categories;
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
