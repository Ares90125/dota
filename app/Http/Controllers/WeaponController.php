<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Weapon;

class WeaponController extends Controller
{
    public function get()
    {
        $weapons=Weapon::with([
            'Heros'
        ])->get();
        return Inertia::render(
            'Weapon',
            ['weapons'=>$weapons]
        );
    }
}
