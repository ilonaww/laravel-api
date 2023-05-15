<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Book::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        
        $data = $request->all();

        $book = new Book();
        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->publishDate = $data['publishDate'];
        $book->pages = $data['pages'];

        $book->save();
        return $book;
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->all();

        $book = new Book();
        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->publishDate = $data['publishDate'];
        $book->pages = $data['pages'];

        $book->save();
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }
   
}
