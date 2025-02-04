<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spesification extends Model
{
    protected $fillable =
    [
        'detail',
        'spek',
        'product_id',
    ];
}