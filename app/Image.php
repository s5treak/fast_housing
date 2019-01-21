<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table='images';
    protected $guarded=['id'];
    protected $fillable= ['user_id','pics','title'];
    
     public function listing(){
         return $this->belongsTo(Listing::class);
    }
}
