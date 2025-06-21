<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'type',
        'path'
    ];

    public function books() {
        return $this->hasMany(Book::class, 'image_id', 'id');
    }

    public function services() {
        return $this->hasMany(Service::class, 'image_id', 'id');
    }
}
