<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $userCount = User::count();
        $bookCount = Book::count();
        $categoryCount = Category::count();

        return view('panel.dashboard', compact('bookCount', 'categoryCount', 'userCount'));
    }
}
