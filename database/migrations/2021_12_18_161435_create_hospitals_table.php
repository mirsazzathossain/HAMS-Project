<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->json('opening_hours')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->json('social_links')->nullable();
            $table->string('contact_page_heading')->nullable();
            $table->string('contact_page_details')->nullable();
            $table->string('about_page_heading')->nullable();
            $table->string('about_page_details')->nullable();
            $table->string('footer_about')->nullable();
            $table->string('doctors_page_heading')->nullable();
            $table->string('doctors_page_details')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('hero_heading')->nullable();
            $table->string('hero_details')->nullable();
            $table->json('home_service_heading')->nullable();
            $table->json('home_service_details')->nullable();
            $table->string('home_team_heading')->nullable();
            $table->string('home_team_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
