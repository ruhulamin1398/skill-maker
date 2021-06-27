<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseTrainer extends Model
{
    use HasFactory;

    public function seminar(){
        return $this->hasMany(course::class,'course_id','id');
    }
    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }

    public function course(){
        return $this->belongsTo(course::class);
    }
    
}
