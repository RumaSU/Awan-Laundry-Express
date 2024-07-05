<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    protected $table="service_units";
    protected $fillable=[
        "idUnit",
        "idStore",
        "unit_name",
        "price",
        "active",
    ];
    protected $hidden = [
        'idStore',
    ];
    protected $guarded = ['idStore'];
    protected $casts = [
        'idUnit' => 'string',
        'idStore' => 'string',
    ];
}
