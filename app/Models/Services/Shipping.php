<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $table="service_shipping";
    protected $fillable=[
        "idShipping",
        "idStore",
        "price",
    ];
    protected $hidden = [
        'idStore',
    ];
    protected $guarded = ['idStore'];
    protected $casts = [
        'idShipping' => 'string',
        'idStore' => 'string',
    ];
}
