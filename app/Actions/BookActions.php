<?php

namespace App\Actions;

use Illuminate\Support\Arr;


class BookActions
{
    public static function exceptInArray($allBooks)
    {
        return array_map(function ($book) {
            return Arr::except($book, ['image_id']);
        }, $allBooks);
    }
}