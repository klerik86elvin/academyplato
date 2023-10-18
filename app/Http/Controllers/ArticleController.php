<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($slug)
    {
        $locale = app()->getlocale();
        if ($slug) {
            $article = Article::where('slug', $slug)->first();
            if ($article) {
                $article = $article->translate('locale', $locale);
                return view('article.detail', [
                    'article' => $article
                ]);
            }
        }
        abort(404);
    }
}
