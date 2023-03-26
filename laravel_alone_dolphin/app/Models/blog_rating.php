<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_rating extends Model
{
    use HasFactory;
    protected $table = 'blog_ratings';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blog(){
        // return $this->hasMany('App\Models\products');

        return $this->hasOne('App\Models\blog','id','blog_id');
        // related foreignkey locallkey
    }
    public function user(){
        // return $this->hasMany('App\Models\products');

        return $this->hasOne('App\Models\User','id','user_id');
        // related foreignkey locallkey
    }
}
