<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\Gender;
use App\Category;
use App\Size;


class Product extends Model
{
    //
    public $timestamps = false;

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }

    public function size(){
        return $this->belongsTo('App\Size');
    }
}
