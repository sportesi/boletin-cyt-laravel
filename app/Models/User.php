<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'turn_id',
        'campus_id',
        'year',
        'comission',
        'validated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function turn()
    {
        return $this->belongsTo(Turn::class);
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function getRoleName()
    {
        return $this->roles()->count() ? $this->roles()->first()->display_name : '';
    }
}
