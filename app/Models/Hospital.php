<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'opening_hours',
        'address',
        'phone',
        'email',
        'social_links',
        'contact_page_heading',
        'contact_page_details',
        'about_page_heading',
        'about_page_details',
        'footer_about',
        'doctors_page_heading',
        'doctors_page_details',
        'hero_image',
        'hero_heading',
        'hero_details',
        'home_service_heading',
        'home_service_details',
        'home_team_heading',
        'home_team_details',
    ];

    protected $casts = [
        'opening_hours' => 'array',
        'social_links' => 'array',
        'home_service_heading' => 'array',
        'home_service_details' => 'array',
    ];
}
