<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $table = 'weapons';
    protected $fillable = [
        'name',
        'damage',
        'is_range',
    ];
    protected $appends = [
        'user_count'
    ];
    public function getUserCountAttribute(){
        return $this->Heros()->count();
    }
    public function Heros(){
        return $this->belongsToMany(weapon::class, 'heroweapons', 'weapon_id', 'hero_id');
    }
}
