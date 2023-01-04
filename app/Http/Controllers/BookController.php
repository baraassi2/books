<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $Book = Book::latest()->paginate(5);

        return view('Books.index', compact('Book'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('Books.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'book_name'          =>  'required',
            'book_id'          =>  'required',
            'book_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->book_image->getClientOriginalExtension();

        request()->book_image->move(public_path('images'), $file_name);

        $Book = new Book;

        $Book->book_name = $request->book_name;
        $Book->book_id = $request->book_id;
        $Book->Writers = $request->Writers;
        $Book->Publishers = $request->Publishers;
        $Book->gender = $request->gender;
        $Book->book_image = $file_name;

        $Book->save();

        return redirect()->route('Books.index')->with('success', 'تم اضافة كتاب جديد');
    }




    public function edit(Book $Book)
    {
        return view('Books.edit', compact('Book'));
    }

    public function update(Request $request, Book $Book)
    {
        $request->validate([
            'book_name'          =>  'required',
            'book_id'          =>  'required',
            'book_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $book_image = $request->book_image;

        if($request->book_image != '')
        {
            $book_image = time() . '.' . request()->book_image->getClientOriginalExtension();

            request()->book_image->move(public_path('images'), $book_image);
        }

        $Book = Book::find($request->hidden_id);
        $Book->book_name = $request->book_name;
        $Book->book_id = $request->book_id;
        $Book->Writers = $request->Writers;
        $Book->Publishers = $request->Publishers;
        $Book->gender = $request->gender;
        $Book->book_image = $book_image;

        $Book->save();

        return redirect()->route('Books.index')->with('success', 'تم تعديل خصائص الكتاب');
    }


    public function destroy(Book $Book)
    {
        $Book->delete();

        return redirect()->route('Books.index')->with('success', 'تم حذف الكتاب');
    }
}
