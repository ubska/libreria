<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function index()
    {

        $books = Book::all();

        return view('home');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function about()
    {
        return view('about');
    }

    public function books()
    {
        // $books = Book::all();
        $books = Book::orderBy('title', 'desc')->get();
        return view('books', compact('books'));
    }

    public function bedBooks()
    {
        $books = Book::where('vote', 1)->get();
        return view('books', compact('books'));
    }
}
