<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'date_of_birth',
        'father_name',
        'mother_name',
        'marital_status',
        'semester',
        'student_id',
        'department_id',
        'gender',
        'blood_group',
        'nationality',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
