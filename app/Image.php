<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table='images';
  protected $guarded=['id'];

    
     public function listing(){
         return $this->belongsTo(Listing::class);
    }
    
     public function user(){
         return $this->belongsTo(User::class);
    }
}
