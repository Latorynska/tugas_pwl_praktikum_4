<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function books(){
        try{
            $books = Book::all();
            return response()->json([
                'message' => 'success',
                'books' => $books,
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'message' => 'Request Failed'
            ], 401);
        }
    }
    public function store(Request $request){
        dd($request);
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:150',
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')),
            'publisher' => 'required|max:1900',
            'city' => 'required|max:75',
            'quantity' => 'required|numeric',
            'bookshelf_id' => 'required',
            'cover' => 'nullable|image'
        ]);
        if($request->hasFile('cover')){
            $path = $request->file('cover')->storeAs(
                'public/cover_buku',
                'cover_buku_'.time().'.'.$request->file('cover')->extension()
            );
            $validated['cover'] = basename($path);
        }
        $book = Book::create($validated);
        return response()->json([
            'message' => 'Buku berhasil ditambahkan',
            'book' => $book
        ], 200);
    }
}
