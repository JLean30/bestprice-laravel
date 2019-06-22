<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Product;
class ControladorProducto extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }
    //validacion de los parametros enviados para su respectivo error falta implementar los valores son del user
    public function validator(array $data)
    {
       return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:12|unique:users',
            'phone' => 'required|integer',
            'password' => 'required|string|min:8',
            'location' => 'required|string|max:255',
            
        ]);

       
    }
    //metodo agregar producto
    public function add(Request $request){
        dd($request->file('photos'));
        //verificacion si el campo de la foto es valido osea la imagen esta subida?
        if($request->file('photos')->isValid()){
            //instancia producto
            $product= new Product; 
            $product ->name = $request ->input('titulo');
            $product ->user_id = Auth::id();//obtencion del id del usuario logueado
            //necesito hacer un foreach del array de imagenes mandado en el post. para guardarlos en bd y en store
           // DB::insert('insert into img_product (product_id, image) values (?, ?)', [Auth::id(), $photos[$i]]);
            $product ->image = $request->photo->store('', 'products');//mueve la imagen al disco creado en FileSystem.php en la ruta img/products/
            $product ->maker = $request ->input('fabricante');
            $product ->category_id = $request ->input('select-category');
            $product ->phone = $request ->input('telefono');
            $product ->location = $request ->input('ubicacion');
            $product ->description = $request ->input('detalle');
            $product ->condition = $request ->input('select-condition') ;
            $product ->quantity = $request ->input('cantidad');
            $product ->status = 'pendiente';
            $product->save();//guarda producto
        }
        
    }


    public function edit(Request $request,$id){
      //verificacion si el campo de la foto es valido osea la imagen esta subida?
        //instancia producto
        $product= Product::find($id); 
        if($product ->user_id === Auth::id()){
            if($request->file('photo')->isValid() ){
                $product ->name = $request ->input('titulo');
                $product ->image = $request->photo->store('', 'products');//mueve la imagen al disco creado en FileSystem.php en la ruta img/products/
                $product ->maker = $request ->input('fabricante');
                $product ->category_id = $request ->input('select-category');
                $product ->phone = $request ->input('telefono');
                $product ->location = $request ->input('ubicacion');
                $product ->description = $request ->input('detalle');
                $product ->condition = $request ->input('select-condition') ;
                $product ->quantity = $request ->input('cantidad');
                $product ->status = 'pendiente';
                $product->save();//guarda producto
            }else {
                echo "error en el archivo imagen";
            }

        }else{
            echo "usuario incorrecto en la edicion del producto";
        }
       
    }
}
