<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('patient');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();

            $table->string('doctor_profession')->nullable();
            $table->string('doctor_speciality')->nullable();
            $table->string('doctor_conditions')->nullable();
            $table->string('doctor_experience')->nullable();
            $table->json('social_links')->nullable();
            $table->json('doctor_memberships')->nullable();
            $table->json('doctor_awards')->nullable();
            $table->json('doctor_education')->nullable();
            $table->string('doctor_biography')->nullable();
            $table->string('doctor_research_interests')->nullable();
            $table->string('doctor_tagline')->nullable();
            $table->string('department_id')->nullable();
            $table->json('doctor_schedule')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
