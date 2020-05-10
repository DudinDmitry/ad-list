<?php


namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function category()
    {
        return $this->hasMany('App\Http\Category');
    }

}
