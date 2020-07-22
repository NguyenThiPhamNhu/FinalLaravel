<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    function getDisplayPrice(){
        $formatedPrice = number_format($this->price,0,',','.');
        return $formatedPrice . "VND";
       }

        //Table Name
    protected $table = 'guitars';

    // Setup fields of table "posts"
    protected $fillable = ['id', 'name', 'specifications', 'image','old_price','new_price','made_in'];

    //Model Relationships
    public function tag(){
        return $this->belongsToMany('App\cart', 'id');
    }
    // Relation category to foreign key 
    public function category() {
        return $this->belongsTo('App\cart','product_id');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
