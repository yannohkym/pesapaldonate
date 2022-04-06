<?php

namespace App\Http\Controllers;

use App\Models\donation;
use Illuminate\Http\Request;

class donationscontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function createdonor()
    {

                       return view('donors');
          }
    public function storedonor( request $data){
      $data->validate([
          'donor_name'=>'required',
          'donors_email'=>'required|email',
          'amount'=>'required',
          'period_of_payment'=>'required'
      ]);

        $input = $data->all();



        donation::create($input);
    }


}
