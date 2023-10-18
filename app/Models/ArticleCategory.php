<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ArticleCategory extends Model
{
    use Translatable;

    protected $table = 'article_categories';

    protected $translatable = [
        'category_name',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id');
    }
}
