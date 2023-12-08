<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookshelf;

class BookshelfController extends Controller
{
    //
    public function index(){
        $data['bookshelfs'] = Bookshelf::get();
        return view('bookshelf.index', $data);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);
        Bookshelf::create($validated);
        
        $notification = array(
            'message' => 'Data buku berhasil ditambahkan',
            'alert-type' => 'success'
        );
        
        return redirect()->route('bookshelf')->with($notification);
    }
    public function create(){
        return view('bookshelf.create');
    }
}
