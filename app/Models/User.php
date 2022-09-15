<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
   
    protected $table = 'wp_users';
    protected $guarded = ['id'];

 
    public function setNameAttribute($value) {
        $this->attributes['user_login'] = $value;
        return $this;   
    }

    public function setPasswordAttribute($value) {
        $this->attributes['user_pass'] = $value;
        return $this;   
    }

    public function setEmailAttribute($value) {
        $this->attributes['user_email'] = $value;
        return $this;   
    }



}
