<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerSlider extends Model
{
    use HasFactory;

    protected $table = 'partners_slider';

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'id', 'partner_id');
    }
}
