<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $book= Book::all();
        return view('index',array('book'=>$book));
    }
}
