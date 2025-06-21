<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $primaryKey = "service_id";
    protected $fillable = [
        'name',
        'price',
        'type',
        'description',
        'image_id',
        'venue_id',
        'telephone'
    ];

    public function image() {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    public function venue() {
        return $this->belongsTo(Venue::class, 'venue_id', 'venue_id');
    }
}
