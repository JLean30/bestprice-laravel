<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Support\Carbon;

class ControladorProducto extends Controller
{

    public function  __construct(){
        $this->middleware('auth');
     
    }
 
    //metodo para la creacion de interesado por producto
    public function makeInterest(Request $request){
        if (Auth::check()) {
           DB::insert('insert into interested_products (interested_id, owner_id, product_id) values (?, ?, ?)', [Auth::id(), $request->input("id_duenno"), $request->input("id_producto") ]);
           return view('index');
        }

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
        
        $photos= $request->file('photos');
        $len= count($photos);
        $validateData = \Validator::make($request->all(), [
            'titulo' => 'required|max:1000',
            'fabricante' => 'required|max:1000',
            'select-category' => 'required|max:10000',
            'telefono' => 'required|integer',
            'ubicacion' => 'required|max:10000',
            'detalle' => 'required|max:1000000',
            'precio' => 'required|integer'
        ]);

        if($validateData -> fails()){
            dd($validateData->errors());
            return redirect()->back()->withInput()->withErrors($validateData->errors());
        }else{
            //verificacion si el campo de la foto es valido osea la imagen esta subida?
            if($len != 0){
                //instancia producto
                $product= new Product;
                $product ->name = $request ->input('titulo' );
                $product ->user_id = Auth::id();//obtencion del id del usuario logueado
                $product ->maker = $request ->input('fabricante');
                $product ->category_id = $request ->input('select-category');
                $product ->phone = $request ->input('telefono');
                $product ->location = $request ->input('ubicacion');
                $product ->description = $request ->input('detalle');
                $product ->condition = $request ->input('select-condition') ;
                $product ->price = $request ->input('precio');
                $product ->status = 'pendiente';
                $product->save();//guarda producto
            
                for($i=0;$i<$len;$i++){
                    if($photos[$i] != ""){
                        $images= new Image;
                        $images->image = $photos[$i]->store('', 'products');
                        $images->save();
                        $product->images()->attach($images);
                    }
                    
                
                }
                return redirect('/');
            
            }
        }
        
    }

    public function delete($id){
        $products= Product::where('id',$id)->with('images')->get();
        foreach($products as $product){
            $images = $product->images;  
        }
        foreach($images as $image){
            Image::where('id',$image->id)->delete();
            Storage::disk('products')->delete($image->image);
        }
        Product::where('id',$id)->with('images')->delete();

        return redirect('/');
        
        
        //falta eliminar en la table de imagenes
      
    }

    public function edit(Request $request){
      //verificacion si el campo de la foto es valido osea la imagen esta subida?
      dd($request->all());
      $id = $request->input('id');
        //instancia producto
        $product= Product::where('id',$id)->get();
        
        foreach($product as $product){
            $user_id =$product->user_id;
        }
       
            if( $user_id=== Auth::id()){
                $product->name = $request ->input('titulo');
                $product->maker = $request ->input('fabricante');
                $product->category_id = $request ->input('select-category');
                $product->phone = $request ->input('telefono');
                $product->location = $request ->input('ubicacion');
                $product->description = $request ->input('detalle');
                $product->condition = $request ->input('select-condition') ;
                $product->price = $request ->input('precio');
                $product->status = 'pendiente';
                $product->save();//guarda producto
                
                
                return redirect()->route('producto', [$product]);
        }else{
            echo "usuario incorrecto en la edicion del producto";
        }

        
       
    }
}
