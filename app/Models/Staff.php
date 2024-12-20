<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'profession_id',
        'category_id',
        'experience'
    ];
    public function profession()
    {
        return $this->belongsTo(Profession::class, 'profession_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
