<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
     return $this->hasOne('App\Profile');
    }

    public function sender(){
    return $this->hasMany('App\Message','sender_id');    
    }
    
     public function receiver(){
        return $this->hasMany('App\Message','receiver_id','id');
    }
    
    public function listings(){
     return $this->belongsTo(Listing::class);
    }
    
       public function images(){
     return $this->hasMany(Image::class);
    }

}
