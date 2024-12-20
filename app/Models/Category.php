<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public function staff() 
    {
        return $this->hasMany(staff::class, 'category_id');
    }
}
