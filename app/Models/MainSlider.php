<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    use Translatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'main_slider';

    protected $translatable = [
        'title',
        'left_button_name',
        'right_button_name',
    ];
}
