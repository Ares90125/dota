<?php

namespace App\Observers;
use App\Models\Hero;
use App\Jobs\SendEmails​;
use App\Models\User;
class HeroObserver
{
    public function created(Hero $hero)
    {
        $admin=User::where('role_id',1)->first();
        SendMailJob::dispatch($admin->email, $hero);
    }
}
