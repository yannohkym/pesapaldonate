<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use Illuminate\Http\Request;
use Validator;

class DonationController extends Controller
{
    public function index(){
        return view('home');
    }


    public function new( Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'amount' => 'required|integer',
            'schedule' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $donation = new Donation();
        $donation->donors_name = $request->input('name');
        $donation->donors_email = $request->input('email');
        $donation->amount = (float)$request->input('amount');
        $donation->period_of_payment = $request->input('schedule');
        $donation->donor_phone_number = $request->input('phone');

        if($donation->save()){
            //create a donor from request data.
            //TODO add donor amount column
            $donor = new Donor();
            $donor->name = $request->input('name');
            $donor->email = $request->input('email');
            $donor->payment_interval = $request->input('schedule');
            $donor->phone_number = $request->input('phone');
            $donor->save();
        }
        //redirect to pesapal

    }
    public function show(){
        $donation=Donation::all();
        return view('show',compact('donation'));
    }
    public function getDonor(){
        $donor=Donor::all();
        return view('donors',compact('donor'));
    }
    public function adminView(){
        return view('admin_dash');
    }
}
