<?php

namespace App\Actions;

use Illuminate\Support\Arr;
use App\Models\Image;

class BookActions
{
    public static function exceptInArray($allBooks)
    {
        return array_map(function ($book) {
            return Arr::except($book, ['image_id']);
        }, $allBooks);
    }

    public static function saveImageAndGiveId($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');

            $imageModel = Image::create([
                'type' => 'book',
                'path' => $path,
            ]);

            return $imageModel->id;
        }
    }

    public static function updateImageAndGiveId($request, $book)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');

            // Delete old image if exists
            if ($book->image) {
                $book->image->delete();
            }

            $imageModel = Image::create([
                'type' => 'book',
                'path' => $path,
            ]);

            return $imageModel->id;
        }
        return null;
    }

    public static function getExceptDataBook($book)
    {
        $book->load('image:id,path');
        $book = Arr::except($book->toArray(), ['created_at', 'updated_at', 'image_id']);
        return $book;
    }
}