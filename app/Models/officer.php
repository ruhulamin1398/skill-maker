<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
    use HasFactory;
    protected $table = 'officers';
    protected $fillable = [
      'country', 'location', 'description', 'map_link', 'image'
    ];
}
