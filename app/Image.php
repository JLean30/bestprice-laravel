<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function users(){
        return $this->belongsToMany(Product::class)->withTimestamps();
    
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'image',
    ];
}
