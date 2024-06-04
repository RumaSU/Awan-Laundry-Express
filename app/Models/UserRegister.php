<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserRegister extends Authenticatable
{
    use HasFactory;
    protected $table = 'newusers';
    protected $primaryKey = 'idUser';
    // protected $fillable = ['name', 'telp', 'email', 'password'];

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    // }
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'telp',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
