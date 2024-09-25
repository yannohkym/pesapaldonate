<?php

namespace App\Http\Controllers;


use App\Models\Config;
use App\Models\Donation;
use App\Models\Donor;
use App\Models\EmailNotification;
use App\Models\User;
use Illuminate\Http\Request;

use Validator;

class AdministratorController extends Controller
{

    public function index()
    {
        //$donations = Donation::all();
        $donations = Donation::orderBy('created_at', 'desc')->get();
        $donors = Donor::all();
          // Get the total amount of all donations
        $totalDonations = \DB::table('donations')->sum('amount');

        // Get the total number of unique donors
        $totalDonors = \DB::table('donations')->distinct('donors_email')->count('donors_email');

        // Get the total number of successful donations
        $successfulDonations = \DB::table('donations')->where('status', 'paid')->count();

        // Get the total number of pending donations
        $pendingDonations = \DB::table('donations')->where('status', 'pending')->count();

        // Get all donations for the table
        $donationsall = \DB::table('donations')->get();
        return view('admin.index',
            [
                'donations' => $donations,
                'donors' => $donors,
                'totalDonations' => $totalDonations,
                'totalDonors'=> $totalDonors, 
                'successfulDonations'=>$successfulDonations, 
                'pendingDonations'=>$pendingDonations, 
                'donationsall'=>$donationsall
            ]
        );
    }

    public function donors()
    {
        $donors = Donor::all();
        return view('admin.donors',
            [
                'donors' => $donors
            ]
        );

    }

    public function users()
    {
        $users = User::all();
        return view('admin.users',
            [
                'users' => $users
            ]
        );
    }
    public function notifications()
    {
        $notifications = EmailNotification::all();
        return view('admin.notifications',
            [
                'notifications' => $notifications
            ]
        );
    }

    public function config(Request $request)
    {
        $config = Config::first();
        if($request->method() === 'POST'){
            $validator = Validator::make($request->all(), [
                'consumer_key' => 'required',
                'consumer_secret' => 'required'
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator->errors());
            }
            if($config){
                $config->consumer_key = $request->input('consumer_key');
                $config->consumer_secret = $request->input('consumer_secret');
            }else{
                $config = new Config;
                $config->consumer_key = $request->input('consumer_key');
                $config->consumer_secret = $request->input('consumer_secret');
            }
            $config->save();
        }
        return view('admin.config',['config'=>$config]);
         
    }
}
