<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as model;

class Product extends Model{
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}