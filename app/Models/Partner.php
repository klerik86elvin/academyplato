<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Partner extends Model
{
    use Translatable;

    protected $translatable = ['name', 'text'];

    public function slider()
    {
        return $this->hasMany(PartnerSlider::class, 'partner_id', 'id');
    }
}
