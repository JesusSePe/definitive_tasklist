<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Accedeix als fills (Post)
     */
    public function tasks(){
        return $this->hasMany(Task::class, 'cat_id');
    }
}