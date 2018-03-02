<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book as Book;
use \App\Genre as Genre;
use \App\Translation as Translation;


class NavController extends Controller
{
    public function librairie(){

        $books = Book::all();
        $genres = Genre::all();
        return view('accueil', ['books' => $books]);
    }
    public function insert()
    {
        $arrayGenres = [];
        $genres = Genre::all();
        foreach ($genres as $genre) {
            $arrayGenres[$genre->id] = $genre->name;
        }
        $translations = Translation::all();
        return view('insert', ['genres' => $arrayGenres, 'translations' => $translations]);
    }
    public function update(Request $request)
    {
        $book = Book::findOrFail($request->input('id'));
        $arrayGenres = [];
        $genres = Genre::all();
        foreach ($genres as $genre) {
            $arrayGenres[$genre->id] = $genre->name;
        }
        return view('update', ['book' => $book, 'genres' => $arrayGenres, 'translations' => $translations]);
   
    }
    public function insertGenre(){
        return view('insertGenre');
    }

}
