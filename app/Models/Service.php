<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    use Translatable;

    protected $table = 'services';

    protected $translatable = [
        'title',
        'text',
    ];
    public function gallery()
    {
        return $this->hasMany(ServiceSlider::class);
    }
}
