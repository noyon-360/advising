<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'password'];

    // Disable Laravel's default password hashing
    public $timestamps = true;

    // Customize the table if it's not named 'users'
    protected $table = 'admin';
}
