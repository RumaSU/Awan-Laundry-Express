<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreAddress extends Model
{
    use HasFactory;
    protected $table="store_address";
    protected $fillable=[
        "idAddress",
        "idStore",
        "ad_street",
        "ad_vill",
        "ad_subdistrc",
        "ad_distrc",
        "ad_city",
        "ad_codepos"
    ];
    protected $hidden = [
        'idStore',
    ];
    protected $guarded = ['idStore'];
    protected $casts = [
        'idAddress' => 'string',
        'idStore' => 'string',
    ];
}
