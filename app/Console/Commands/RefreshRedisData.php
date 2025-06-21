<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;

class RefreshRedisData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'service:refresh-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::forget('cache_services_by_category');

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

        $data = [];

        foreach ($categories as $cat) {
            $data[$cat] = Service::with(['image', 'venue'])
                ->where('type', $cat)
                ->orderByDesc('created_at')
                ->take(5)
                ->get();
        }

        Cache::forever('cache_services_by_category', $data);

        $stickers = [
            '🚀',
            '🔥',
            '💡',
            '✅',
            '🎉',
            '🥳',
            '😎',
            '🌟',
            '🧹',
            '🕺',
            '💾',
            '💥'
        ];
        $randomSticker = $stickers[array_rand($stickers)];

        $this->info("Services cache refreshed! {$randomSticker}");
    }
}
