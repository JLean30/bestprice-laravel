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
   

    public function viewHome(){
        return view('index');
    }

    public function viewAdmin(Request $request){
        $request->user()->authorizeRoles(['admin']);
        return view('admin');
    }

    public function viewAnadirProducto(Request $request){
        $request->user()->authorizeRoles(['user', 'admin']);
        //aqui le mando las categorias de la tabla
        $categories = Category::all();
        return view('anadirProducto', compact('categories'));
    }

    public function viewProducto($id){
        $products = Product::where('id', $id)->get();
        if (!$products->isEmpty()) {
            $category = new Category;
        foreach ($products as $product) {
            $titulo = $product->name;
            $fabricante = $product->maker;
            $imagen = $product->image;
            $telefono = $product->phone;
            $ubicacion = $product->location;
            $descripcion = $product->description;
             //llamada a relacion de categoria con productos
            $categoria = $category->with('products')->find($product->category_id)->name; 
            
        }
        return view('producto', compact('titulo', 'imagen','fabricante','telefono','ubicacion','descripcion','categoria'));
        }else {
            abort(404);
        
    }
}

    //metodo para obtener producto para editarlo en la vista
    public function productEdit($id){
        //instancia producto
        $product= Product::find($id); 
        if($product ->user_id === Auth::id()){
        return $product;

        }else{
            abort(404);
        }
    
    }

public function viewProfile($id){
    $profiles = Profile::where('id', $id)->get();
    $user = new User;
    $product = new Product;
    $editar= false;
    if (!$profiles->isEmpty()) {
    foreach ($profiles as $profile) {
        $datosUsuario = $user->with('profiles')->find($profile->user_id); 
       
        $usuario = $datosUsuario->username;
        $imagen = $profile->image;
        $descripcion = $profile->description;
        $nombreCompleto= $datosUsuario->name." ".$datosUsuario->lastName ;
        $ubicacion=$datosUsuario->location;
        $telefono= $datosUsuario->phone;
        $email=$datosUsuario->email;
        if(Auth::id() === $profile->user_id){
            $editar= true;
        }
         //llamada a relacion de profile con usuario
    }
    $products= Product::where('user_id', $id);
   
    return view('profile', compact('imagen','usuario','descripcion','nombreCompleto','ubicacion','telefono','email','editar','products'));
    }else {
        abort(404);
    
        }
    }
    
}
