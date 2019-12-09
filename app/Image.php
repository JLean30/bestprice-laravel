<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
<<<<<<< HEAD
    public function users(){
        return $this->belongsToMany(Product::class)->withTimestamps();
    
    }
=======
    public function products(){
        return $this->belongsToMany(Product::class)->withTimestamps();
    
    }
    
>>>>>>> test
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'image',
    ];
}
