<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Event extends Model
{
    use Translatable;

    protected $table = 'events';

    protected $translatable = [
        'event_name',
        'text'
];


    public function category()
    {
        return $this->belongsTo(EventCategory::class);
    }
}
