<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;

class User_Detail extends Model
{
    use HasFactory;
    protected $table="user_detail";
    public $timestamps = false;
    protected $fillable=[
        "idUser",
        "name",
        "telp",
        'birth_date',
        'gender',
        'birth_date',
    ];
    protected $hidden = [
        'idUser',
    ];
    protected $guarded = ['idUser'];
    protected $casts = [
        'idUser' => 'string',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }
}
