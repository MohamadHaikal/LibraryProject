<?php

namespace App\Http\Controllers;

use App\Author;

use App\AuthorBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function index()
    {
        $author = Author::all();
        return view('Author.index', compact('author'));
    }

    public function create()
    {
        return view('Author.create');
    }

    public function store(Request $request)
    {
        $author = new Author;
        $author->name      = $request->name;
        $author->book_num  = 0;
        $author->about = $request->about;
        $photoname = rand() . time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('Uploaded/image/author'), $photoname);
        $author->image = $photoname;
        $author->save();
        return back();
    }



    public function edit($id)
    {
        $author = Author::find($id);
        return view('Author.edit', compact('author'));
    }


    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->name = $request->name;
        $author->book_num = $request->number;
        $author->about = $request->about;
        $imagee = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('Uploaded/image/author'), $imagee);
        $author->image = $imagee;

        $author->save();
        return back();
    }


    public function destroy($id)
    {
        //
        $author_bb = AuthorBook::where('author_id', $id)->get();

        foreach ($author_bb as $key) {

            $key->delete();
        }
        $author = Author::find($id);
        $author->delete();
        return back();
    }
}
