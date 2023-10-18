<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class EventCategory extends Model
{
    use Translatable;

    protected $table = 'event_category';

    protected $translatable = [
        'category_name',
];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
