<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarTrainer extends Model
{
    use HasFactory;


    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }  
    public function seminar(){
        return $this->belongsTo(seminar::class,'seminer_id');
    }

}
