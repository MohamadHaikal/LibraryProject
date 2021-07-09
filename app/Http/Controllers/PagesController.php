<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Books;
use App\Author;
use App\AuthorBook;

use App\Language;
class PagesController extends Controller
{
    public function index()
    {

        $department = Department::all();
        $english_book = Books::where('language_id', 1)->get();
        $arabic_book = Books::where('language_id', 2)->get();
        $author = Author::all();
        $auth_book = AuthorBook::all();
        $last_book = Books::latest()->take(4)->get();
        $arabic_best_today = Books::where('language_id', 2)->max('rate');
        $english_best_today = Books::where('language_id', 1)->max('rate');
        $bestEnglish = Books::where('rate', $english_best_today)->get();
        $bestArabic = Books::where('rate', $arabic_best_today)->get();


        foreach ($author as $key) {
            $count = 0;
            foreach ($auth_book as $k) {
                if ($key->id == $k->author_id) {
                    $aut = Author::find($key->id);
                    $count = $count + 1;
                }
            }

            $aut->book_num = $count;
            $aut->save();
        }

        return view('index', compact('department'))->with('english_book', $english_book)
            ->with('author', $author)->with('arabic_book', $arabic_book)->with('auth_book', $auth_book)
            ->with('last_book', $last_book)->with('bestEnglish', $bestEnglish)->with('bestArabic', $bestArabic);
    }

    public function search(Request $request)
    {
        $author = Author::all();
        $auth_book = AuthorBook::all();
        $books = Books::where('title', $request->search)->get();
        return view('search', compact('author'))->with('books', $books)->with('auth_book', $auth_book);
    }


    public function details($id)
    {$department = Department::all();
        $author = Author::all();

        $auth_book = AuthorBook::all();
      $book=Books::find($id);
$language=Language::all();

return view('BookDetails')->with('department',$department)->with('book',$book)
->with('author',$author)->with('auth_book',$auth_book)->with('language',$language);

    }
}
