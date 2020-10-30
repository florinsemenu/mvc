<?php
class UserController{
    public function _contruct()
    {   
        echo"User controler constructor creado";
    }
    public function index()
    {
        echo "en el metodo index";
    }
    public function show($arguments)
    {
        
        $id = $arguments[0];
        echo "mostrar el usuario" . $id;

    }
    public function delete($arguments)
    {
        
        $id = $arguments[0];
        echo "borrar el usuario" . $id;

    }
}