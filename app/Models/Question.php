<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Question extends Model
{
    use Translatable;
    protected $translatable = ['question', 'answer'];
}
