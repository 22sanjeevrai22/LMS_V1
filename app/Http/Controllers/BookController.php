<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('panel.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('panel.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $formData = [
            'title'=>$request->title,
            'author_name'=>$request->author_name,
            'category_id'=> $request->category,
            'price'=>$request->price,
            'description'=>$request->description,
            'quantity'=>$request->quantity,
        ];

        Book::create($formData);

        return back()->with('success', 'Book Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('panel.books.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $updatedData = [
            'title'=>$request->title,
            'author_name'=>$request->author_name,
            'category_id'=> $request->category,
            'price'=>$request->price,
            'description'=>$request->description,
            'quantity'=>$request->quantity,
        ];

        $book = Book::findOrFail($book->id);
        $book->update($updatedData);

        return back()->with('success', 'Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book = Book::find($book->id);
        if ($book) {
            $book->delete();
            return back()->with('deleted', 'Book Deleted Successfully');
        } else {
            return back()->with('error', 'Book Not Found');
        }
    }
}
