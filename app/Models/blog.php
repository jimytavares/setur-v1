<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = "blog";
    protected $guarded = [];
    
    protected $attributes = [
        'curtidas' => 0,
    ];
    
    protected $casts = [
        'tag' => 'array'
    ];
}
