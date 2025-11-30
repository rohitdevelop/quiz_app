<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    function quizzes() {
        // $categorise =Category::withCount('quizzes')->get();
        return $this->hasMany(Quiz::class);
    }
}
