<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function home()
    {
        $categories = [
            'Karnay-surnay',
            'To’yxona',
            'Choyxona',
            'Bezatish',
            'Artistlar',
            'Osh',
            'Foto-video',
            'Kortej',
            'Uy ta’mirlash'
        ];

        $servicesByCategory = Cache::rememberForever('cache_services_by_category',  function () use ($categories) {
            $data = [];
            foreach ($categories as $cat) {
                $data[$cat] = Service::with(['image', 'venue'])
                    ->where('type', $cat)
                    ->orderByDesc('created_at') 
                    ->take(5) 
                    ->get();
            }
            return $data;
        });

        return view('index', [
            'servicesByCategory' => $servicesByCategory,
            'categories' => $categories
        ]);
    }

    public function refreshServices()
    {
        Cache::forget('cache_services_by_category');
        return redirect('/')->with('status', 'Kesh yangilandi!');
    }
}
