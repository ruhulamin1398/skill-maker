<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminerTrainer extends Model
{
    use HasFactory;

    public function seminar(){
        return $this->hasMany(seminar::class,'course_id','id');
    }
    public function trainers(){
        return $this->belongsTo('Trainer::class','trainer_id','id');
    }

}
