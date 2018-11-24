<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CounterData extends Model
{
    protected $table = 'counter_data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value', 'counter_id'
    ];
}
