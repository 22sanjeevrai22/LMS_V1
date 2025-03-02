<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
       $books = Book::paginate(7);
       $categories = Category::paginate(6);
        return view('website.home', compact('books', 'categories'));
    }

    public function about(){
        return view('website.layouts.card');
    }

    public function service(){
        return view('website.service');
    }

    public function blog(){
        return view('website.blog');
    }

    public function getSingleCategory($category_id){
        $category = Category::find($category_id);
        if (!$category) {
            abort(404);
        }
        return view('website.singlecategory', compact('category'));
    }

    public function categories(){
        $categories = Category::all();
        return view('website.categories', compact('categories'));
    }

    public function getSingleBook($book_id){
        $book = Book::find($book_id);
        if (!$book) {
            abort(404);
        }
        return view('website.singlebook', compact('book'));
       
    }

    public function books(){
       $books = Book::all();
       $categories = Category::all();

        return view('website.books', compact('books', 'categories'));
    }
}
