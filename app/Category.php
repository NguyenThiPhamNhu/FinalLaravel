<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function photos(){
        return $this->hasMany("App\Photo","photos_id","category_id");
    }
}
