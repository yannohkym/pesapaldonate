<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donorscontroller extends Controller
{
    public function create(){
        //return a view
    }
    public function store(request $request){
//validate data in array form
        $this->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'amount'=>'required',
                'donationschedule' => 'required'
        ]);
        //store the data in the data base
        Contact::create($request->all());
        //reply
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
