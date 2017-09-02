<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAuthor()
    {
        $user = $this->user()->first();
        return "$user->name ( $user->year $user->comission - " . $user->turn->name . " )";
    }
}
