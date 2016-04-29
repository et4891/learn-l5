<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'posted_on'
    ];

    /**
     * @param $query
     */
    public function scopePostedOn($query) {
        $query->where('posted_on', '<=', Carbon::now());
    }

    /**
     * @param $date
     */
    public function setPostedOnAttribute($date) {
        $this->attributes['posted_on'] = Carbon::parse($date);
    }
}
