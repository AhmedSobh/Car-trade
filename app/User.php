<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin_add()
    {
      return $this->hasMany('App\Car');
    }

    public function employee_modify()
    {
      return $this->belongsToMany('App\Car','car_employee');
    }

    public function makes()
    {
      return $this->hasMany('App\Make','user_id');
    }

    public function tickets()
    {
      return $this->hasMany('App\Ticket','user_id');
    }
}
