<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $casts = [
        'keywords' => 'array'  
    ];
}
