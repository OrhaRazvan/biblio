<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class BooksController extends Controller
{
    public function index() {
    	$books = Books::get->all();

    	return view('books', compact('books', $books));
    }
}
