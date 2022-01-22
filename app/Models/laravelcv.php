<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class laravelcv extends Pivot
{
    public $fillable = ['name', 'designation', 'email', 'phone', 'profile', 'skills', 'technical', 'exp', 'results', 'year', 'school', 'college', 'university'];
}
