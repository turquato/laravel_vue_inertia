<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_num',
        'lname',
        'fname',
        'mname',
        'position',
        'salarygrade',
        'office'
    ];
}
