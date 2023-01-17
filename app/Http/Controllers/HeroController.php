<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function get()
    {
        $users=Hero::get();
        return Inertia::render(
            'Hero',
            ['users'=>$users]
        );
    }
}
