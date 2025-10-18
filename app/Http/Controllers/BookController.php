<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author:id,name,email')
            ->get(['id', 'title', 'description', 'price', 'author_id']);

        return response()->json([
            'status' => 'success',
            'data' => $books
        ]);
    }
}