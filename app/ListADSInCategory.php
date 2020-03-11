<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListADSInCategory extends Model
{
    protected $fillable = [
        'image','title','rating','count','price','discount','net','favorite'
    ];
}
