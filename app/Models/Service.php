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
}
