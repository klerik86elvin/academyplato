<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class PlatoIntro extends Model
{
    use HasFactory, Translatable;
    protected $table = 'plato_intro';
    public $translatable = ['name','title','text'];
}
