<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
	protected $fillable = ['name','cat_name','location','bath','room','toilet','price','duration','description'];
      public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user(){
         return $this->belongsTo(User::class);
    }
    
     public function images(){
         return $this->hasMany(Image::class);
    }
}
