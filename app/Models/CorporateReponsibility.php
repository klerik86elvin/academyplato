<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CorporateReponsibility extends Model
{
    use HasFactory,Translatable;
    protected $table = 'corporate_responsibility';

    public $translatable = ['name', 'title','text'];
}
