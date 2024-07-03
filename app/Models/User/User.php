<?php

namespace App\Models\User;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements AuthenticatableContract
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword, AuthenticatableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';
    protected $primaryKey ='idUser';
    protected $fillable=[
        "idUser", 
        "email", 
        "password"
    ];
    protected $guarded = ['idUser'];
    protected $guard = 'web';
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'idUser' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    public function UserDetail() {
        $selectColumn = ['name', 'telp', 'gender', 'birth_date', 'remain_name_change'];
        return $this->belongsTo(User_Detail::class,'idUser','idUser')->select($selectColumn);
    }
    public function UserAddress() {
        return $this->belongsToMany(User_Address::class, 'users', 'idUser', 'idUser', 'idUser', 'idUser', 'users')->select('user_address.*');
    }
    public function UserStore() {
        // return $this->belongsTo('');
    }
}
