<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiosk extends Model
{
     protected $fillable = [
         'name',
         'city',
         'country',
         'version',
         'installed_date'
     ];
}
