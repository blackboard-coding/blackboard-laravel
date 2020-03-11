<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainMenuCategory extends Model
{
    protected $fillable = [
        'name','image', 'url'
    ];

}
