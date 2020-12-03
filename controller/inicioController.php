<?php
    require_once 'models/Producto.php';

class inicioController
{
    public function index()
    {
        $producto = new Producto();
        $producto->setDestacados('Si');
        $productos = $producto->getvalor();
        require_once 'views/inicio/inicio.php';
    }

    public function despedida(){
        require_once 'views/inicio/despedida.php';
    }
    
}
