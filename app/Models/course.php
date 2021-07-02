<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    public function trainers(){
     return $this->hasMany(batchTrainer::class, 'batch_id','id');
    }
    public function courseVideo(){
        return $this->hasMany(courseVideo::class);
    }

    public function batches(){
        return $this->hasMany(Batch::class, 'model_id','id');
    }
}
