<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['genre_id', 'title', 'photo', 'publish_date', 'description'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
