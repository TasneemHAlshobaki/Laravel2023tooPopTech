<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::withTrashed()->paginate(15);
        return view('book.index')->with('books', $books);
        
      
      
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorys = Category::get();
        return view('Home.addBook')->with('categorys', $categorys);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $auther_name = $request->input('auther_name');   
        $description = $request->input('description');
        $category_id = $request->input('category_id');
        $date_of_publication = $request->input('date_of_publication');

        $price = request('price');        # Helper Function

    



        $book = new Book;
        $room->name = $name;
        $room->auther_name = $auther_name;
        $room->description = $description;
        $room->price = $price;
        $room->category_id = $category_id;
        $room->date_of_publication = $date_of_publication;
        $room->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
