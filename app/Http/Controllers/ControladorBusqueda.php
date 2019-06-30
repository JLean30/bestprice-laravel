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
        $products = Product::where('name', 'like', '%'.$request->input('search').'%')->with('images')->get();
        $categories = Category::all();
        return view('busqueda',compact('products','categories'));
    }
}
