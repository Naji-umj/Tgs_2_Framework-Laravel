<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::withCount('books')->get(['id', 'name', 'email']);
        return response()->json([
            'status' => 'success',
            'data' => $authors
        ]);
    }
}