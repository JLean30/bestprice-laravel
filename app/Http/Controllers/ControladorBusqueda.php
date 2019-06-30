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
        $search = $request ->get('search');
        $products = DB::table('products')->where('name','%'.$search.'%');
        return view('busqueda',['products'=>$products]);
    }
}
