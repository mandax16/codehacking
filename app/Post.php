<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [

        'photo_id',
        'category_id',
        'title',
        'body',

        ];

    protected function user(){

        return $this->belongsTo('App\User');
    }

    protected function photo(){

        return $this->belongsTo('App\Photo');
    }

    protected function category(){

        return $this->belongsTo('App\Category');
    }
}
