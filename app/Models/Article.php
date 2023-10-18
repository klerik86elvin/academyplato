<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Article extends Model
{
    use Translatable;

    protected $table = 'articles';

    


    protected $translatable = [
        'name',
        'text',
    ];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'id');
    }

    public function getCreate_atAttribute($value)
    {
        return Carbon::createFromDate($value)->format('d-m-Y');
    }
   /*  protected function created_at(): Attribute
    {
        return Attribute::make(
             function ($value) {
                return  Carbon::createFromDate($value)->format('d-m-Y'))
            };
        );
    } */

    
}
