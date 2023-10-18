<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use App\Models\Article;

class ArticleCategoryController extends Controller
{
    public function index($id=null)
    {
        $locale = app()->getlocale();

        $categories = ArticleCategory::all()->translate('locale', $locale);


        if ($id) {
            $articles = ArticleCategory::withTranslations($locale)->find($id)->articles()->paginate(6);
        } else {
            $articles = Article::withTranslations($locale)->paginate(6);
        }

        return view('article.index', [
            'categories' => $categories,
            'articles' => $articles
        ]);
    }
}
