<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class Store extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'stores';
    protected $primaryKey ='idStore';
    protected $fillable=[
        "idStore", 
        "photo", 
        "name",
        "email"
    ];
    protected $guarded = ['idStore'];
    protected $guard = 'web';
    
    protected $casts = [
        'idStore' => 'string',
    ];
    
    public function StoreAddress() {
        return $this->belongsTo(StoreAddress::class, 'idStore', 'idStore', 'stores');
    }
    public function StorePermitt() {
        return $this->belongsToMany(StorePermitt::class, 'stores', 'idStore', 'idStore', 'idStore', 'idStore', 'stores');
    }
}
