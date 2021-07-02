<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(course::class);
    }
    public function trainers(){
        return $this->hasMany(batchTrainer::class);
    }

    public function batches(){
        return $this->hasMany(Batch::class, 'model_id','id');
    }


}
