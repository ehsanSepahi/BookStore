<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookstoreController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        Book::create($validatedData);
        return redirect()->route('books.index')->with('success', 'Book added successfully');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        $book = Book::findOrFail($id);
        $book->update($validatedData);
        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $books = Book::where('title', 'like', "%$keyword%")
            ->orWhere('author', 'like', "%$keyword%")
            ->get();

        return view('books.search', compact('books', 'keyword'));
    }
}
