<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $fillable = [
        'name', 'email','phone','last_education', 'current_work', 'address', 'image'
    ];


    public function batches(){
        return $this->hasMany(batchTrainer::class);
    }

    public function seminars(){
        return $this->hasMany(SeminarTrainer::class);
    }

    // public function courseTrianers(){
    //     return $this->hasMany(courseTrainer::class);
    // }



}
