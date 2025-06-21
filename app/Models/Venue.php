<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    /** @use HasFactory<\Database\Factories\VenueFactory> */
    use HasFactory;
    protected $table = "venues";
    protected $primaryKey = "venue_id";
    protected $fillable = [
        'venue_name',
        'address',
        'capacity',
        'price'
    ];

    public function service()
    {
        return $this->hasOne(Service::class, 'venue_id', 'venue_id');
    }
}
