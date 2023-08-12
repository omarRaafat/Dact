<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $table = 'courses';
    protected $fillable = [
        'name', 'description', 'duration', 'image' , 'is_active'
    ];
   public function getImageAttribute($image){
       return asset($image);
   }
}
