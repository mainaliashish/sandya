<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'address',
        'address_one',
        'phone_number_one',
        'phone_number_two',
        'phone_number_three',
        'phone_number_four',
        'email_one',
        'email_two'
    ];
}
