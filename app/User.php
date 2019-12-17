<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'um_users';
    protected $fillable = ['name','email','password'];

    public function role()
    {
    	return $this->hasMany('App\Role','id','role_id');
    }
}
