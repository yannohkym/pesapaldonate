<?php

namespace App\Console\Commands;

use App\Models\Donor;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class SendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send-donation-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Donation Reminders';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $donors = Donor::all();
        foreach ($donors as $donor){
            $today = Carbon::today()->toDateString();
            if($donor->payment_interval === 'monthly'){
                $first_day_of_the_month = Carbon::today()->startOfMonth()->toDateString();
                if($first_day_of_the_month == $today){
                    Mail::to($donor->email)->send(new \App\Mail\SendReminders());
                }

            }elseif ($donor->payment_interval === 'annually'){
                $leo = Carbon::today();
                $end_of_year = $leo->copy()->endOfYear();
                if($end_of_year == $today){
                    Mail::to($donor->email)->send(new \App\Mail\SendReminders());
                }

            }
        }
    }
}
