<?php

namespace App\Http\Controllers\panel;

use App\Models\Borrow;
use App\Http\Requests\StoreBorrowRequest;
use App\Http\Requests\UpdateBorrowRequest;
use App\Models\Book;

class BorrowController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrowList = Borrow::paginate(10);
        return view('panel.borrow.index', compact('borrowList'));
    }

    public function approve(Borrow $borrow)
    {
        $book = Book::findOrFail($borrow->book_id);
        if ($book->quantity >= 1) {
            if ($borrow->status == 'approved') {
                return redirect()->back()->with('error', 'Book Already Approved');
            } else {
                $borrow->status = 'approved';
                $borrow->save();
                $book->quantity = $book->quantity - 1;
                $book->save();
                return redirect()->back()->with('success', 'Borrow Request Approved Successfully');
            }
        } else {
            return redirect()->back()->with('error', 'Book Out of Stock');
        }
    }

    public function return(Borrow $borrow)
    {
        $book = Book::findOrFail($borrow->book->id);

        if ($borrow->status == 'returned') {
            return redirect()->back()->with('error', 'Book already returned');
        } else {
        $borrow->status = 'returned';
        $borrow->save();
        $book->quantity = $book->quantity + 1;
        $book->save();
        return redirect()->back()->with('success', 'Book returned successfully');
        }
    }

    public function reject(Borrow $borrow)
    {
        if ($borrow->status == 'rejected') {
            return redirect()->back()->with('error', 'Book already rejected');
        } else {
            $borrow->status = 'rejected';
            $borrow->save();
            return redirect()->back()->with('error', 'Borrow Request Rejected Successfully');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBorrowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBorrowRequest $request, Borrow $borrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrow $borrow)
    {
        $borrow = Borrow::findOrFail($borrow->id);

        if ($borrow) {
            $borrow->delete();
            return redirect()->back()->with('success', 'Borrow Request Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Borrow Request Not Found');
        }
    }
}
