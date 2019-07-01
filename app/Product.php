<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
    public function images(){
        return $this->belongsToMany(Image::class)->withTimestamps();
    
    }
    public function getNextId()
    {

        $statement = DB::select("show table status like 'products'");

        return $statement[0]->Auto_increment;
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
