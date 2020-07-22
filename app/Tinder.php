<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinder extends Model
{
    function getDisplayPrice(){
        $formatedPrice = number_format($this->price,0,',','.');
        return $formatedPrice . "VND";
       }

        //Table Name
    protected $table = 'posts';

    // Setup fields of table "posts"
    protected $fillable = ['id', 'title', 'comment'];

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
