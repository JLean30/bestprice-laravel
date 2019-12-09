<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    public function user()
    {
<<<<<<< HEAD

        return $this->hasMany(User::class);
=======
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->hasOne('App\Category', 'id', 'category_id');
>>>>>>> test
    }
    public function images(){
        return $this->belongsToMany(Image::class)->withTimestamps();
    
    }
<<<<<<< HEAD
=======
    
>>>>>>> test
    public function getNextId()
    {

        $statement = DB::select("show table status like 'products'");
<<<<<<< HEAD

        return $statement[0]->Auto_increment;
    }

    public function getImages($id){
        $statement= DB::select('select * from img_product where product_id = ?', [$id]);
     
        return $statement;
=======

        return $statement[0]->Auto_increment;
>>>>>>> test
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id', 'category_id', 'image', 'maker', 'description', 'quantity', 'condition', 'status',
    ];
}
