<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    use HasFactory;
    public $fillable=['donors_name','donors_email','amount','period_of_payment'];

}
