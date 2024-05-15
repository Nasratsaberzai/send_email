<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostJob extends Model
{
    use HasFactory;
    protected $fillable = [ 
        "Comp_name",
        "Jobtitle",
        "Skill",
    ];

    
}
