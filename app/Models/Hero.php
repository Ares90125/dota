<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';
    protected $fillable = [
        'name',
        'health',
        'user_id',
    ];
    protected $appends = [
        'damage',
      ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getDamageAttribute(){
        return $this->weapons()->sum('damage');
    }
    public function weapons(){
        return $this->belongsToMany(weapon::class, 'heroweapons','hero_id', 'weapon_id');
    }
}
