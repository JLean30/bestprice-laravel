<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Profile;
use App\User;

class ControladorBusqueda extends Controller
{
    public function show(Request $request)
    {
        $categories = Category::all();
        $name=$request->input('buscar');
            $products = Product::where([['name', 'like', '%'.$request->input('buscar').'%'],
            ['location', 'like', '%'.$request->input('ubicacion').'%'],
            ['condition', 'like', '%'.$request->input('select-condition').'%'],
            ['category_id', 'like', '%'.$request->input('select-category').'%']])->with('images')->get();
            return view('busqueda',compact('products','categories',$name));

    }
}
