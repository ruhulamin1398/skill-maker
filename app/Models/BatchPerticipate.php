<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchPerticipate extends Model
{
    use HasFactory;


    public function participator(){
        return $this->belongsTo(perticipator::class);
    } 
    public function course(){
        return $this->belongsTo(course::class);
    }
    public function batch(){
        return $this->belongsTo(Batch::class);
    }
    public function enroll(){
        return $this->belongsTo(enroll::class);
    }
}
