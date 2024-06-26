<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';

    protected $fillable = [
        'name',
        'price', 
        'count_day',
        'short_description',
        'desciption',
        'image',
    ];

}
