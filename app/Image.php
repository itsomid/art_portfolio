<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereUserId($value)
**/
class Image extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
