<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
      'title', 'sub_title', 'description', 'service_image'
    ];

    const EXCERPT_LEANGHT = 100;

    public function excerpt(){
        return Str::limit($this -> description, service::EXCERPT_LEANGHT, '');;
    }
}
