<?php

namespace App\Services;

use App\Models\Book;
use App\Actions\BookActions;

class BookService
{
    /**
     * Get all books with images.
     *
     * @return array
     */
    public function getAllBooksWithImages()
    {
        $allBooks = Book::getAll(Book::query())->withImage()->get()->toArray();
        return BookActions::exceptInArray($allBooks);
    }

    public function saveBookWithImage($data)
    {
        $image_id = BookActions::saveImageAndGiveId($data);

        $bookData = [
            'name'        => $data['name'],
            'author_name' => $data['author_name'],
            'image_id'    => $image_id,
        ];

        $book = Book::create($bookData);
        $book->save();

        return BookActions::getExceptDataBook($book);
    }
}