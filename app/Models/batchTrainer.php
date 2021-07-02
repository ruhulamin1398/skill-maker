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


//      public function batches(){
//         return $this->hasMany(Batch::class, 'model_id','id');
//     }
}

