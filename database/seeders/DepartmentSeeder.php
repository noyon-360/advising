<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $departments = [
            'CSE' => 'Computer Science and Engineering',
            'EEE' => 'Electrical and Electronic Engineering',
            'BBA' => 'Bachelor of Business Administration',
            'CE' => 'Civil Engineering',
            'ME' => 'Mechanical Engineering'
        ];

        foreach ($departments as $code => $name) {
            Department::create(['name' => $code, 'full_name' => $name]); // Storing both short form and full name
        }
    }
}
