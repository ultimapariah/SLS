<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::latest()->paginate(10);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_title'          =>  'required',
            'book_publisher'      =>  'required',
            'book_author'         =>  'required',
            'book_year'           =>  'required',
            'book_volume'         =>  'required'
        ]);

        $book = new Book;

        $book->book_title = $request->book_title;
        $book->book_publisher = $request->book_publisher;
        $book->book_author = $request->book_author;
        $book->book_year = $request->book_year;
        $book->book_volume = $request->book_volume;

        $book->save();

        return redirect()->route('books.index')->with('success', 'Book Data added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'book_title'          =>  'required',
            'book_publisher'      =>  'required',
            'book_author'         =>  'required',
            'book_year'           =>  'required',
            'book_volume'         =>  'required'
        ]);

        $book = Book::find($request->hidden_id);

        $book->book_title = $request->book_title;
        $book->book_publisher = $request->book_publisher;
        $book->book_author = $request->book_author;
        $book->book_year = $request->book_year;
        $book->book_volume = $request->book_volume;

        $book->save();

        return redirect()->route('books.index')->with('success', 'Book Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book Data deleted successfully');
    }
}
