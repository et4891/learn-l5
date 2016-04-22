<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'name',
        'owner',
        'type',
        'status',
        'notes',
        'adopted'
    ];
}