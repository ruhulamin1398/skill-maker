<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perticipator extends Model
{
    use HasFactory;
    protected $table = 'perticipators';
    protected $fillable = [
        'name', 'father_name','number','email','pasport','city','country','occopation','training','enablers','payment_type'
    ];
}
