<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    protected $fillable = [
        'emp_name',
        'salary'
    ];
}
