<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        $departments = Department::all();
        return view("Auth.student.create", compact('departments'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'mobile' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'marital_status' => 'required|string|max:50',
            'semester' => 'required|string|max:50',
            'student_id' => 'required|string|max:20|unique:students,student_id',
            'department_id' => 'required|exists:departments,id',
            'gender' => 'required|string|max:10',
            'blood_group' => 'required|string|max:5',
            'nationality' => 'required|string|max:100',
        ]);

        Student::create($request->all());

        return redirect()->route('students-create')->with('success', 'Student added successfully.');
    }
}
