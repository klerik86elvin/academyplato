<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id = null)
    {
        if ($id != null)
        {
            $news = News::findOrFail($id);
            return view('news.detail', compact('news'));
        }
        $news = News::latest()->paginate(2);
        return view('news.content', compact('news'));
    }
}
