<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserRegister extends Model
{
    use HasFactory;
    protected $table = 'newusers';
    //protected $primaryKey = 'id_user';
    protected $fillable = ['name', 'telp', 'email', 'password'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
