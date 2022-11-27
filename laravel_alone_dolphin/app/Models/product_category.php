<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    use HasFactory;
    protected $table = 'product_category';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function products(){
        // return $this->hasMany('App\Models\products');

        return $this->hasMany(products::class,'product_category_id','id');
        // related foreignkey locallkey
    }
}
