<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseVideo extends Model
{
    use HasFactory;
    
    public function courseVideo(){
        return $this->belongsTo(course::class);
    }
}
