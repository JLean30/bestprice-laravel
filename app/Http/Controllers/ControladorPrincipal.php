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
        $products = Product::where('id', $id)->with('images')->get();
       
        if (!$products->isEmpty()) {
            $category = new Category;
        foreach ($products as $product) {
            $images = $product->images;
            $len= count($images);
            $thubnails = array();
            for($i=0;$i < $len;$i++){
                if($i===0){
                    $imagen = $images[$i]->image;
                }else{

                    array_push($thubnails, "/img/products/".$images[$i]->image);

                }
            }
           $dueno= $product->user_id;
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
        return view('producto', compact('dueno','titulo', 'imagen','fabricante','telefono','ubicacion','descripcion','categoria','condicion','precio','thubnails'));
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
        
        $productos = $user->with('products')->find($profile->user_id);
        dd($productos);
        //foreach($products->products as $products_user){
        
        //}
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
    
   
    return view('profile', compact('imagen','usuario','descripcion','nombreCompleto','ubicacion','telefono','email','editar','productos'));
    }else {
        abort(404);
    
        }
    }
    
}
