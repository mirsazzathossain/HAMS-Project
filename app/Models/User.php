<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'role',
        'address',
        'password',
        'profile_photo_path',
        'doctor_profession',
        'doctor_speciality',
        'doctor_conditions',
        'doctor_experience',
        'social_links',
        'doctor_memberships',
        'doctor_awards',
        'doctor_education',
        'doctor_biography',
        'doctor_research_interests',
        'doctor_tagline',
        'department_id',
        'doctor_schedule'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'social_links' => 'array',
        'doctor_memberships' => 'array',
        'doctor_awards' => 'array',
        'doctor_education' => 'array',
        'doctor_schedule' => 'array',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function scopeDoctorFields($query)
    {
        $query->select(
            'name',
            'email',
            'phone',
            'profile_photo_path',
            'doctor_profession',
            'doctor_speciality',
            'doctor_conditions',
            'doctor_experience',
            'social_links',
            'doctor_memberships',
            'doctor_awards',
            'doctor_education',
            'doctor_biography',
            'doctor_research_interests',
            'doctor_tagline',
            'department_id',
            'doctor_schedule'
        );
    }

    public function appoinments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
