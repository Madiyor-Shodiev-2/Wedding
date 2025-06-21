<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Actions\BookActions;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Arr;
class BookController extends Controller
{
    
    public function index()
    {
        $allBooks = Book::getAll(Book::query())->withImage()->get()->toArray();

        $allBooks = BookActions::exceptInArray($allBooks);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book->load('image:id,path');
        $book = Arr::except($book->toArray(), ['created_at', 'updated_at', 'image_id']);
        // $book = $book->except(['created_at', 'updated_at']);

        return response()->json($book, 302);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
