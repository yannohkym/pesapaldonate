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
        $donations = Donation::all();
        $donors = Donor::all();
        return view('admin.index',
            [
                'donations' => $donations,
                'donors' => $donors
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
