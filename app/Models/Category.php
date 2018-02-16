<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public static function active()
    {
        $categories = static::has('news')
            ->withCount('news')
            ->where('status', 1)
            ->orderBy('news_count', 'desc')
            ->get();

        return $categories;
    }

    public static function primary()
    {
        $categories = static::where([
            ['status', '=', '1'],
            ['primary', '=', '1']
        ])->get();

        return $categories;
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function getStatus()
    {
        return $this->status ? 'Activa' : 'Inactiva';
    }
}
