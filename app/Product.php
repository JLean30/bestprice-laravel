<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{  
    
    public function user(){
        
        return $this->belongsTo(User::class);
          
       }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_id','category_id','image','maker','description','quantity','condition', 'status',
    ];
}
