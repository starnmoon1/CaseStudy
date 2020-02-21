<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'customer_id',
        'total',
        'date_order',
        'note',
    ];
}
