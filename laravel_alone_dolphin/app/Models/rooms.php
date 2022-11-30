<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function products(){
        return $this->hasMany(products::class,'room_id','id');
    }


    public function product_category(){
        return $this->hasMany(product_category::class,'room_id','id');
    }
}
