<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Book\CreateBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Http\Controllers\Controller;
use App\Actions\BookActions;
use Illuminate\Support\Arr;
use App\Models\Book;
use App\Services\BookService;

class BookController extends Controller
{
    
    public function index(BookService $bookService)
    {
        $allBooks = $bookService->getAllBooksWithImages();

        return response()->json($allBooks, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBookRequest $request, BookService $bookService)
    {
        $book = $bookService->saveBookWithImage($request);

        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book = BookActions::getExceptDataBook($book);

        return response()->json($book, 302);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        
        $book->update($request->validated());

        $book = BookActions::getExceptDataBook($book);

        return response()->json($book, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json(['message' => 'Book deleted successfully'], 204);
    }
}
