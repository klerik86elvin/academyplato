<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class WorkerOfMonth extends Model
{
    use Translatable;

    protected $table = 'worker_of_month';

    protected $fillable = [
        'worker_id',
        'date',
    ];

    protected $translatable = [
       
    ];

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

}
