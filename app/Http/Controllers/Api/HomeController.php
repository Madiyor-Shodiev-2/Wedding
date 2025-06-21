<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function home()
    {
        $venues = Venue::select([
            'venue_name',
            'address', 
            'capacity', 
            'price'
        ])->get();
        
        return response()->json(
            $venues, 200
        );
    }

    public function show(Venue $venue)
    {
        $sendVenue = Arr::except($venue->toArray(), [
            'created_at', 
            'updated_at', 
            'venue_id'
        ]);

        return response()->json($sendVenue, 302);
    }
}
