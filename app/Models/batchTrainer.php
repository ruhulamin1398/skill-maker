<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batchTrainer extends Model
{
    use HasFactory;

    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }

    public function course(){
        return $this->belongsTo(course::class);
    }


     public function batch(){
        return $this->belongsTo(Batch::class,'id', 'model_id');
    }
}

