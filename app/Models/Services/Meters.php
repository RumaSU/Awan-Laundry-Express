<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meters extends Model
{
    use HasFactory;
    protected $table="service_meters";
    protected $fillable=[
        "idMeters",
        "idStore",
        "price",
        "active",
    ];
    protected $hidden = [
        'idStore',
    ];
    protected $guarded = ['idStore'];
    protected $casts = [
        'idMeters' => 'string',
        'idStore' => 'string',
    ];
}
