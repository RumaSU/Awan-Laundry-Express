<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Address extends Model
{
    use HasFactory;
    protected $table="user_address";
    protected $fillable=[
        "idAddress",
        "idUser",
        "labelAddress",
        "receiver",
        "receiver_telp",
        "ad_street",
        "ad_vill",
        "ad_subdistrc",
        "ad_distrc",
        "ad_city",
        "ad_coordinates",
        "selected"
    ];
    protected $hidden = [
        'idUser',
    ];
    protected $guarded = ['idUser'];
    protected $casts = [
        'idAddress' => 'string',
        'idUser' => 'string',
    ];
}
