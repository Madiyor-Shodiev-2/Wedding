<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $fillable = [
        'name',
        'author_name',
        'image_id',
    ];
}
