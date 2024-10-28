<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('index')->with('news', News::paginate(15));
    }

    public function search(string $term)
    {
        return view('index')->with('news', News::where('title', 'body', 'link', "%$term%")->paginate(15));
    }

    public function show(News $News)
    {
        return view('show')->with('news', $News);
    }
}
