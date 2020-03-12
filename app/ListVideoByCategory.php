<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListVideoByCategory extends Model
{
    protected $fillable = [
        'name','description','image','rate','price'
    ];
}
