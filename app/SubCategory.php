<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    //
    protected $table = 'subcategories';

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
