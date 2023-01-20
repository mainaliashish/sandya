<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_logo',
        'address',
        'address_one',
        'site_description',
        'email_one',
        'email_two',
        'contact_number_one',
        'contact_number_two',
        'contact_number_three',
        'facebook',
        'instagram',
        'twitter',
        'site_policy',
        'site_why_us',
        'site_mission',
        'site_vision',
        'site_image',
        'meta_title',
        'meta_description',
        'meta_tags',
        'opening_hours'
    ];
}

