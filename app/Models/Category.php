<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as model;

class Category extends Model{
    public function category(){
        return $this->hasMany('App\Models\Product');
    }
}