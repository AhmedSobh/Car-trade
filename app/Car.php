<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function admin()
    {
      return $this->belongsTo('App\User');
    }

    public function employee()
    {
      return $this->belongsToMany('App\User','car_employee');
    }

    public function makes()
    {
      return $this->hasMany('App\Make','car_id');
    }
}
