<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(course::class, 'model_id','id');
    }
    public function trainers(){
        return $this->hasMany(batchTrainer::class);
    }

    public function participators(){
        return $this->hasMany(BatchPerticipate::class);
    }

    public function batch(){
        return $this->belongsTo(Batch::class, 'model_id','id');
    }

}
