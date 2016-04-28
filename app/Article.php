<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'   //temporary!!
    ];

    protected $dates = ['published_at'];

    //We can add our own scope and use it in the controller to reuse the eloquent query call
    //For something as easy as Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
    //Might be always used and to cut down this part ->where('published_at', '<=', Carbon::now()) into ->published()
    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query) {
        $query->where('published_at', '>', Carbon::now());
    }

    //This sets the value for the attribute published_at before entering the database
    //Gets the value in the input and pass it into the function's argument
    //The following will show the time as midnight of the day
    //To the show time entered, we can use Carbon::createFromFormat('Y-m-d', $date);
    public function setPublishedAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * An article is owned by a user.
     * example: $article->user
     * The user from above is from the function name
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
