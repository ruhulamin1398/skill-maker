<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class successStory extends Model
{
    use HasFactory;
    protected $table = 'success_stories';
    protected $fillable = [
        'name', 'location', 'short_desctiption', 'long_description', 'image'
    ];
}
