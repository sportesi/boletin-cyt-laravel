<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    public function getUser()
    {
        return $this->belongsTo(User::class);
    }

    public function getAuthor()
    {

    }
}
