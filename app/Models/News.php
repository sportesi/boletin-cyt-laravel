<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAuthor()
    {
        $user = $this->user()->first();

        return implode(' ', [
            $user->name,
            '(',
            $user->course_year . utf8_encode('°'),
            $user->comission,
            $user->year,
            $user->turn->name,
            ')',
        ]);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
