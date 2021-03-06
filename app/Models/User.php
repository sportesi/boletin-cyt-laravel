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
        'course_year',
        'semester',
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

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function getRoleName()
    {
        return $this->roles()->count() ? $this->roles()->first()->display_name : 'Alumno';
    }

    public function getComission()
    {
        return implode(' ', [
            $this->course_year . '°',
            $this->comission,
            $this->year
        ]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|User[]
     */
    public static function admins()
    {
        return User::join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id', 1)->get();
    }
}
