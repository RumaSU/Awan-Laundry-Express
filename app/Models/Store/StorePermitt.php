<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorePermitt extends Model
{
    use HasFactory;
    protected $table="store_permitt";
    public $timestamps = false;
    protected $fillable=[
        "idUser",
        "idStore",
        "permitt_access",
        'active',
    ];
    protected $hidden = [
        'idUser',
        'idStore',
    ];
    protected $guarded = ['idUser', 'idStore'];
    protected $casts = [
        'idUser' => 'string',
        'idStore' => 'string',
    ];
}
