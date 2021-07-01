<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    public function trainers(){
     return $this->hasMany(courseTrainer::class);
    }
    public function courseVideo(){
        return $this->hasMany(courseVideo::class);
    }

    public function batches(){
        return $this->hasMany(Batch::class);
    }
}
