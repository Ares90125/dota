<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\HeroCreateEmail;

class SendEmails​ implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $hero;
    protected $adminMail;
    public function __construct()
    {
        $this->hero = $hero;
        $this->adminMail = $adminMail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        DB::beginTransaction();
        try {
            $this->sendEmail(
                $this->adminMail,
                $this->hero,
            );
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
        }
    }
    public function sendEmail($sender, $hero)
    {
        \Mail::to($sender)->send(new HeroCreateEmail($hero));
    }
}
