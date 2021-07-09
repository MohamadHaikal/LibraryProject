<?php

namespace App\Http\Controllers;

use App\Books;
use App\Author;
use App\AuthorBook;
use App\Language;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{

    public function index()
    {
        $book = Books::all();
        return view('Book.index')->with('book', $book);
    }

    public function create()
    {
        $lang = Language::all();
        $department = Department::all();
        $author = Author::all();
        return view('Book.create', compact('author'))->with('lang', $lang)->with('department', $department);
    }

    public function store(Request $request)
    {
        //  $author=Author::find($request->get('author_id'));


        $Book = new Books;
        $Book->title      = $request->title;
        $Book->pages_num  = $request->number;
        $Book->description = $request->description;
        $ima = time() . '.' . $request->img->getClientOriginalExtension();
        $request->img->move(public_path('Uploaded/image/book'), $ima);
        $Book->image = $ima;
        $files = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('Uploaded/file'), $files);
        $Book->file = $files;
        $Book->language_id = $request->get('lang_id');
        $Book->department_id = $request->get('depart_id');



        $Book->save();
        $Book->authors()->attach($request->aut);

        return back();
    }
    public function show(Books $book)
    {
    }


    public function edit($id)
    {
        $book = Books::find($id);
        $lang = Language::all();
        $author = Author::all();
        $department = Department::all();
        return view('Book.edit', compact('author'))->with('lang', $lang)->with('department', $department)->with('book', $book);
    }


    public function update(Request $request, $id)
    {
        $Book = Books::find($id);
        $Book->title = $request->title;
        $Book->pages_num = $request->number;
        $Book->description = $request->description;
        $ima = time() . '.' . $request->img->getClientOriginalExtension();
        $request->img->move(public_path('Uploaded/image/book'), $ima);
        $Book->image = $ima;
        $files = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('Uploaded/file'), $files);
        $Book->file = $files;
        $Book->language_id = $request->get('lang_id');
        $Book->department_id = $request->get('depart_id');

        $Book->save();
        return back();
    }


    public function destroy($id)
    {
        //
        $author_bb = AuthorBook::where('books_id', $id)->get();
        $book = Books::find($id);
        foreach ($author_bb as $key) {

            $key->delete();
        }

        $book->delete();

        return back();
    }
}
