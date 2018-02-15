<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;

    protected $casts = [
        'genres' => 'json_encode'
      ];
  
}
