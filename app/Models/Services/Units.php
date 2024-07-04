<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    protected $table="service_units";
    protected $fillable=[
        "idUnits",
        "idStore",
        "unit_name",
        "price",
    ];
    protected $hidden = [
        'idStore',
    ];
    protected $guarded = ['idStore'];
    protected $casts = [
        'idUnits' => 'string',
        'idStore' => 'string',
    ];
}
