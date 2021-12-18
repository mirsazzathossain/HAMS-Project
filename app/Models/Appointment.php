<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'patient_phone',
        'patient_email',
        'doctor_id',
        'message',
        'appointment_date',
    ];

    protected $casts = [
        'appointment_date' => 'datetime',
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
}
