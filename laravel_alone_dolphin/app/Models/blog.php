<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blog_rating(){
        // return $this->hasMany('App\Models\products');

        return $this->hasMany('App\Models\blog_rating','blog_id','id');
        // related foreignkey locallkey
    }
}
