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
}
