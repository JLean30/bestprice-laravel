<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Tarjeta Madre', 'Tarjeta de Video','Procesador',
        'Almacenamiento','Gabinetes','Memoria Ram',
        'Fuente de Poder', 'Ventilador', 'Periferico',
         'Enfriamiento','Desktop', 'Laptop' ];
         $cant =count($categories);
        for($i=0; $i<$cant;$i++){
            $categoria = new Category();
            $categoria->name = $categories[$i];
            $categoria->save();
        }                 
    }
}
