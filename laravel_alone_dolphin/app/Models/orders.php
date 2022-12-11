<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function order_details(){
        return $this->hasMany(order_details::class,'order_id','id');
    }

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
