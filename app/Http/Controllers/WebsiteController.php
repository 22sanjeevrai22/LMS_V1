<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function home()
    {
        $books = Book::paginate(7);
        $categories = Category::paginate(6);
        return view('website.home', compact('books', 'categories'));
    }

    public function about()
    {
        return view('website.layouts.card');
    }

    public function service()
    {
        return view('website.service');
    }

    public function blog()
    {
        return view('website.blog');
    }

    public function getSingleCategory($category_id)
    {
        $category = Category::find($category_id);
        if (!$category) {
            abort(404);
        }
        return view('website.singlecategory', compact('category'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('website.categories', compact('categories'));
    }

    public function getSingleBook($book_id)
    {
        $book = Book::find($book_id);
        if (!$book) {
            abort(404);
        }
        return view('website.singlebook', compact('book'));
    }

    public function books(Category $category)
    {
        $booksOfCategory = $category->books;
        $books = Book::all();
        $categories = Category::all();

        return view('website.books', compact('books', 'categories', 'booksOfCategory'));
    }

    public function borrow($book_id)
    {
        $user = Auth::user();
        $book = Book::find($book_id);

        if ($user) {
            if ($book->quantity >= 1) {
                $borrow = new Borrow();
                $borrow->user_id = $user->id;
                $borrow->book_id = $book->id;
                $borrow->save();
                return redirect()->back()->with('success', 'Book borrowed successfully');
            } else {
                return redirect()->back()->with('error', 'Sorry, this book is not available');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
