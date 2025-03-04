<?php

namespace App\Http\Controllers\panel;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController
{
    public function index(){
        $userCount = User::count();
        $bookCount = Book::count();
        $categoryCount = Category::count();

        return view('panel.dashboard', compact('bookCount', 'categoryCount', 'userCount'));
    }
}
