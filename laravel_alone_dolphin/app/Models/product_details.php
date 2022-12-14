<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_details extends Model
{
    use HasFactory;
    protected $table = 'product_details';
    protected $primaryKey = 'id';
    protected $guarded = [];

    
    public function product(){
        return $this->hasOne('App\Models\products','id','product_id');
    }

}
