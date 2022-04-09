<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    public $fillable=['donors_name','donors_email','amount','period_of_payment','donor_phone_number','status','pesapal_tracking_id','pesapal_status'];

}
