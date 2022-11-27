<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function orders_details(){
        return $this->hasMany('App\Models\orders_details','product_id','id');
    }

    public function product_images(){
        return $this->hasMany('App\Models\product_images','product_id','id');
    }

    public function product_details(){
        return $this->hasOne('App\Models\product_details','product_id','id');
    }
}
