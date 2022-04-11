<?php

namespace App\Http\Controllers;


use App\Models\Donation;
use App\Models\Donor;
use App\Models\User;

class AdministratorController extends Controller
{

    public function index(){
        $donations = Donation::all();
        $donors = Donor::all();
        return view('admin.index',
            [
                'donations'=>$donations,
                'donors' => $donors
            ]
        );
    }

    public function donors(){
        $donors = Donor::all();
        return view('admin.donors',
            [
                'donors' => $donors
            ]
        );
          }
        public function users(){
            $users = User::all();
            return view('admin.users',
                [
                    'users' => $users
                ]
            );
           }

    }
