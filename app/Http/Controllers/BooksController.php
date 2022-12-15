<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();

        return view('books.index', compact('books'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required|max:225',
            'halaman' => 'required|integer',
            'kategori' => 'required|max:100',
            'penerbit' => 'required|max:100',
            'authors_id'=> 'required',
        ];

        $validated = $request->validate($rules);

        // ];

        Books::create($validated);

        $request->session()->flash('success', "Successfully adding {$validated['judul']}!");
        return redirect()->route('books.index');
        //

        // $newMovie = new Movie();
        // $newMovie->title = $validated['title'];
        // $newMovie->genre = $validated['genre'];
        // $newMovie->description = $validated['description'];
        // $newMovie->year = $validated['year'];
        // $newMovie->rating = $validated['rating'];
        // $newMovie->save();


        return "Film Baru sudah di tambahkan";
    }

    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }
    public function edit(Books $book)
    {
        return view(
            'books.edit', compact('book'));
    }
    public function update(Request $request, Books $book)
    {
        $rules = [
            'judul' => 'required|max:225',
            'halaman' => 'required|integer',
            'kategori' => 'required|max:100',
            'penerbit' => 'required|max:100',
            'authors_id'=> 'required',
        ];

        $validated = $request->validate($rules);


        $book->update($validated);
        $request->session()->flash('success', "Berhasil memperbarui data film {$validated['judul']}.");
        return redirect()->route('books.index')->with('success', "Data Buku {$book['judul']} Sudah Dihapus. ");

    }
    public function destroy(Books $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', "Data Buku {$book['judul']} Sudah Dihapus. ");
    }

}
