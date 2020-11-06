<?php
namespace App\Controllers;

require_once('../app/models/ProductType.php');
use \App\Models\ProductType;

class ProductTypeController 
{
    public function __construct()
    {
        echo "en ProductTypeController<br>";
    }

    public function index()
    {
        echo "En método index algo más<br>";
        //buscar la lista de productos
        $products = ProductType::all(); //arriba pongo use ...        
        //generar la vista
        include('../views/producttypes/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el producto $id";        
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        echo "Borrar el usuario $id";        
    }
}
