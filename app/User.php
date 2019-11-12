<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'login', 'email', 'password', 'age', 'gender', 'country', 'city'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;


    public function firstname()
    {
        return $this->hasOne(Firstname::class);
    }
    public function lastname()
    {
        return $this->hasOne(Lastname::class);
    }
    public function age()
    {
        return $this->hasOne(Age::class);
    }
    public  function isadmin(){
        if ($this->admin){
            return true;
        };
        return false;
    }
}
