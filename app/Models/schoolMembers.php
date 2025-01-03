<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schoolMembers extends Model
{
    protected $fillable = ['class', 'students', 'teachers', 'graduates'];
}
