<?php

namespace App\Console\Commands;

use App\Models\Donor;
use Illuminate\Console\Command;
use Carbon\Carbon;

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
            $today = Carbon::today();
            if($donor->payment_interval === 'monthly'){
                $last_day_of_the_month = Carbon::today()->startOfMonth()->toDateString();
                if($last_day_of_the_month === $today){
                    //send email
                }

            }elseif ($donor->payment_interval === 'annually'){
                $end_of_year = Carbon::today();
                if($today === $end_of_year){
                    //send reminder
                }

            }
        }
    }
}
