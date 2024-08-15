<?php

namespace App\Models;

use App\Traits\HasRolesAndPermission;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Maanuser extends Authenticatable
{
    use HasFactory, Notifiable, HasRolesAndPermission;

    protected $fillable = [
        'first_name','last_name','mobile', 'email', 'password',
    ];


}
