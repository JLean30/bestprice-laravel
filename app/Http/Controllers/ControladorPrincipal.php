<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                $users = User::with('profiles')->find($profile->user_id);
            
            }
            $profile = $users->profiles;
            


            if (Auth::id() === $id) {
                $editar = true;
            }




            return view('editarPerfil',compact('profile','users','editar'));
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
        $products = Product::with('images', 'user')->where('status','aprobado')->get();


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
        $products = Product::where('id', $id)->with('images','user')->get();
      

        if (!$products->isEmpty()) {
            $category = new Category;
            foreach ($products as $product) {
                $images = $product->images;
                $len = count($images);
                $thubnails = array();
                for ($i = 0; $i < $len; $i++) {
                 
                        $imagen = $images[0]->image;
                   

                        array_push($thubnails, "/img/products/" . $images[$i]->image);
                    
                }
                $nombreDuenno=$product->user->name;
                $idDuenno = $product->user_id;
                $titulo = $product->name;
                $fabricante = $product->maker;
                $telefono = $product->phone;
                $ubicacion = $product->location;
                $descripcion = $product->description;
                $condicion = $product->condition;
                $precio = $product->price;
                //llamada a relacion de categoria con productos
                $categoria = $category->with('products')->find($product->category_id)->name;
                $interes=false;
                $duennoProducto=false;
                //verificacion de interes producto usuario
                if (Auth::check()) {
                    $results = DB::table('interested_products')->where('interested_id', Auth::id())->where('product_id', $id)->get();
                  if(Auth::id() === $idDuenno){
                      $duennoProducto=true;
                  }
                    if(!$results->isEmpty()){
                      
                        $interes=true;
                       
                    }
               
                }
               
            }
            return view('producto', compact('id','duennoProducto','idDuenno','nombreDuenno', 'titulo', 'imagen', 'fabricante', 'telefono', 'ubicacion', 'descripcion', 'categoria', 'condicion', 'precio', 'thubnails','interes'));
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
                
                        $imagen = $images[0]->image;
                        array_push($thubnails, "/img/products/" . $images[$i]->image);
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
            if (Auth::id() == $id) {
                $editar = true;
                $statements = DB::table('interested_products')->where('owner_id', $id)->get();
                $usuariosInteresados=array();
                foreach($statements as $statement){
                    $usersInterested = User::where('id',$statement->interested_id)->get();
                    $productsInterested = Product::where('id',$statement->product_id)->with('images')->get();
                    
                    foreach($usersInterested as $userInterested){
                        foreach($productsInterested as $product){
                            $images = $product->images;  
                       
                        foreach($images as $image){
                            
                        array_push($usuariosInteresados,["nombre" => $userInterested->name, "imagen"=>'/img/products/'.$image->image, "descripcionProducto"=>$product->name,
                         "interesado"=> '/profile/'.$userInterested->id, "id_peticion"=> '/borrar-interes/'.$statement->id] );
                         break;
                        }
                    }
                    }
                   
                }
                return view('profile', compact('editar', 'users', 'products', 'profile','usuariosInteresados'));
            }else{
                return view('profile', compact('editar', 'users', 'products', 'profile'));
            } 
        } else {
            abort(404);
        }
    }

        public function editarPerfil(Request $request){
           
            $id = $request->input('id');
             //instancia producto
            $perfils= Profile::where('id',$id)->get();
            
                    foreach ($perfils as $perfil) {
                        
                        $perfil->description = $request ->input('description');
                     if($request->file('photo')->isValid()){
                        $perfil->image = $request->file('photo')->store('', 'profiles');
                    }
                         $perfil->save();//guarda producto
                    }
                    
                    return redirect()->route('profile', ['id' => $id]);
                    
                
          
        }
    }

