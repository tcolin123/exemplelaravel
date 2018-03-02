<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book as Book;
use \App\Genre as Genre;

class ActionController extends Controller
{
    public function insertOne(Request $request)
    {
        
        
        $newBook = New book();
        $newBook->title = $request->input('title');
        $newBook->author = $request->input('author');
        $newBook->excerpt = $request->input('excerpt');
        $newBook->genre_id = $request->input('genre');

        $newBook->save();
        foreach($request->input('translations') as $translation) 
        {
            $newBook->translations()->attach($translation);
        }
        return redirect('/');
    }
    public function deleteOne(Request $request)
    {
        
        Book::destroy($request->input('id'));
        return redirect('/');
    }
    public function updateOne(Request $request)
    {
        dd($request->input());
        $book = Book::find($request->input('id'));
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->excerpt = $request->input('excerpt');
        $book->genre_id = $request->input('genre');
        $book->save();
        $book->translations()->detach();
        foreach ($request->input('translations') as $translation) {
            $book->translations()->attach($tranlation);
        }
        return redirect('/');
    }
    public function insertOneGenre(Request $request)
    {
        $newGenre = New Genre();
        $newGenre->name = $request->input('name');
        $newGenre->save();
        return redirect('/insertGenre');
    }
}
