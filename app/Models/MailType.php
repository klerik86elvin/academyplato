<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class MailType extends Model
{
    use HasFactory, Translatable;
    public $translatable = ['name'];
}
