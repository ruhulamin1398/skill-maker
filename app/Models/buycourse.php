<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buycourse extends Model
{
    use HasFactory;
    protected $table = 'buycourses';
    protected $fillable = [
        'userID', 'courseID', 'assignID', 'price','status','comment'
    ];

    public function course(){
        return $this->belongsTo(seminar::class,'course_id','id');
    }
}
