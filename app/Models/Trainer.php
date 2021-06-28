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


    public function courses(){
        return $this->hasMany(courseTrainer::class);
    }
   
}
