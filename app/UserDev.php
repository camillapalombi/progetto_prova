<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDev extends Model
{
    protected $fillable = ['name','username', 'email', 'password', 'presentazione', 'github','località', 'photo', 'cv'];
}
