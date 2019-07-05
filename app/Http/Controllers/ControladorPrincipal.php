<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Profile;
use App\User;

class ControladorPrincipal extends Controller
{
    public function viewEditarPerfil($id){
        $profiles = Profile::where('id', $id)->get();
        $editar = false;
        if (!$profiles->isEmpty()) {
            foreach ($profiles as $profile) {
                $users = User::with('profiles', 'products.images')->find($profile->user_id);
            }

            $profile = $users->profiles;



            $products = $users->products;


            if (Auth::id() === $id) {
                $editar = true;
            }




            return view('editarPerfil', compact('editar', 'users', 'products', 'profile'));
        } else {
            abort(404);
        }
    }

    public function viewBusqueda(){
        $categories = Category::all();
        return view('busqueda', compact('categories'));
    }
    public function viewHome()
    {
        $products = Product::with('images', 'user')->get();


        return view('index', compact('products'));
    }

    public function viewAdmin(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('admin');
    }

    public function viewAnadirProducto(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        //aqui le mando las categorias de la tabla
        $categories = Category::all();
        return view('anadirProducto', compact('categories'));
    }
    public function productTest(){
        $products = Product::where('id', 1)->with('images','categories')->get();
        dd($products);
    }
    public function viewProducto($id)
    {
        $products = Product::where('id', $id)->with('images')->get();

        if (!$products->isEmpty()) {
            $category = new Category;
            foreach ($products as $product) {
                $images = $product->images;
                $len = count($images);
                $thubnails = array();
                for ($i = 0; $i < $len; $i++) {
                    if ($i === 0) {
                        $imagen = $images[$i]->image;
                    } else {

                        array_push($thubnails, "/img/products/" . $images[$i]->image);
                    }
                }
                $dueno = $product->user_id;
                $titulo = $product->name;
                $fabricante = $product->maker;
                $telefono = $product->phone;
                $ubicacion = $product->location;
                $descripcion = $product->description;
                $condicion = $product->condition;
                $precio = $product->price;
                //llamada a relacion de categoria con productos
                $categoria = $category->with('products')->find($product->category_id)->name;
            }
            return view('producto', compact('dueno', 'titulo', 'imagen', 'fabricante', 'telefono', 'ubicacion', 'descripcion', 'categoria', 'condicion', 'precio', 'thubnails'));
        } else {
            abort(404);
        }
    }

    //metodo para obtener producto para editarlo en la vista
    public function viewEditProduct($id)
    {
        //instancia producto
        $products = Product::where('id', $id)->with('images')->get();
        $categories = Category::all();
        foreach ($products as $product) {
            if (Auth::id() != $product->user_id) {
                abort(404);
            } else {
                $images = $product->images;
                $len = count($images);
                $thubnails = array();
                for ($i = 0; $i < $len; $i++) {
                    if ($i === 0) {
                        $imagen = $images[$i]->image;
                    } else {

                        array_push($thubnails, "/img/products/" . $images[$i]->image);
                    }
                }
                return view('editarProducto', compact('products', 'categories', 'imagen', 'thubnails'));
            }
        }
    }

    public function viewProfile($id)
    {
        $profiles = Profile::where('id', $id)->get();
        $editar = false;
        if (!$profiles->isEmpty()) {
            foreach ($profiles as $profile) {
                $users = User::with('profiles', 'products.images')->find($profile->user_id);
            }

            $profile = $users->profiles;



            $products = $users->products;


            if (Auth::id() === $id) {
                $editar = true;
            }




            return view('profile', compact('editar', 'users', 'products', 'profile'));
        } else {
            abort(404);
        }
    }
}
