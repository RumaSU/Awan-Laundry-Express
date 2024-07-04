<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kilos extends Model
{
    use HasFactory;
    protected $table="service_kilos";
    protected $fillable=[
        "idKilos",
        "idStore",
        "price",
    ];
    protected $hidden = [
        'idStore',
    ];
    protected $guarded = ['idStore'];
    protected $casts = [
        'idKilos' => 'string',
        'idStore' => 'string',
    ];
}
