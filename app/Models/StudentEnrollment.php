<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEnrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name', 'dob', 'gender', 'nationality',
        'guardian_name', 'guardian_phone', 'guardian_email', 'relationship', 'guardian_address',
        'entry_level', 'previous_school',
        'allergies', 'medical_conditions',
        'emergency_name', 'emergency_phone'
    ];
}
