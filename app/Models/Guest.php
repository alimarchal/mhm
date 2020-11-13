<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    public $fillable = ['guest_name','father_husband_name','number_of_guests','cnic','15','contact','address','room_type','room_number','check_in_date','check_out_date','discount_type','discount','total_amount','vehicle_no','advance_payment','total_payment','remarks','total_payable'];
}
