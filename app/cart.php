<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
  public function products(){
    return $this->belongsTo("App\Guitar", "product_id", "id");
}
}
