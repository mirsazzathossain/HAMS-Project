<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hospital::create([
            'phone' => '+880 1234-56',
            'email' => 'test@gmail.com',
            'address' => 'Plot 16, Block B, Aftabuddin Ahmed Road, Bashundhara R/A, Dhaka-1212',
            'contact_page_heading' => 'We’re Connected All Time To Help Our Patients',
            'contact_page_details' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
            'about_page_heading' => 'Thousands Of Specialities For Any Type Diagnostic.',
            'about_page_details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.            ',
            'footer_about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'doctors_page_heading' => 'Our Outstanding Team Is Active To Help You!',
            'doctors_page_details' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
            'hero_heading' => 'Find A Doctor & Book Appointment',
            'hero_details' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
            'home_service_heading' => ["Best Monitoring System", "Advanced Operating Room", "Only Best Doctors"],
            'home_service_details' => ["Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            'home_team_heading' => "Our Outstanding Team Is Active To Help You!",
            'home_team_details' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.",
            'opening_hours' => ["Mon-Tue 08:30-18:30", "Wed-Thu 08:30-18:30", "Friday 08:30-18:30", "Saturday 08:30-18:30"],
            'social_links' => ['https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.youtube.com/'],
        ]);
    }
}
