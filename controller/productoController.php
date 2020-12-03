<?php

require_once 'models/Producto.php';

class productoController
{
    public function gestion()
    {

        Utils::isAdmin();

        $producto = new Producto();
        $productos = $producto->getAll();
        

        require_once 'views/producto/gestion.php';
    }

    public function ver()
    {

        if (isset($_GET['id']) && isset($_GET['idc'])) {

            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);
            $producto->setCategoria($_GET['idc']);
            $prod = $producto->getOne();
            $prods_cat = $producto->getAllbyCategory();
        }
        require_once 'views/producto/info.php';
    }

    public function crear()
    {
        Utils::isAdmin();
        require_once 'views/producto/crear.php';
    }

    public function save()
    {
        Utils::isAdmin();

        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            $destacados = isset($_POST['destacados']) ? $_POST['destacados'] : false;

            if ($nombre && $descripcion && $precio && $stock && $categoria && $destacados) {
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoria($categoria);
                $producto->setDestacados($destacados);
                

                /*Guardar la imagen*/
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {
                    if (!is_dir('cargas/')) {
                        mkdir('cargas', 0777, true);
                    }

                    move_uploaded_file($file['tmp_name'], 'cargas/' . $filename);
                    $producto->setImagen($filename);
                }
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $producto->setId($id);
                    
                    $save = $producto->update();
                }else{
                    $save = $producto->save();
                }
                
                if ($save) {
                    $_SESSION['producto'] = "complete";
                } else {
                    $_SESSION['producto'] = "failed";
                }
            } else {
                $_SESSION['producto'] = "failed";
            }
        } else {
            $_SESSION['producto'] = "failed";
        }
        header("Location:" .dir. 'producto/gestion');
    }


    public function lista()
    {
        
        Utils::isAdmin();

        $producto = new Producto();
        $productos = $producto->getAll();
        require_once 'views/producto/lista-productos.php';
    }

public function editar()
    {
        Utils::isAdmin();

        if (isset($_GET['id'])) {
            $edit = true;

            $producto = new Producto();
            $producto->setId($_GET['id']);
            $prod = $producto->getOne();
            require_once 'views/producto/crear.php';
        } else {
            header('Location:' .dir . 'producto/gestion');
        }
    }
    public function eliminar()
    {
        Utils::isAdmin();

        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);
            $delete = $producto->delete();
            if ($delete) {
                $_SESSION['delete'] = 'complete';
            } else {
                $_SESSION['delete'] = 'failed';
            }
        } else {
            $_SESSION['delete'] = 'failed';
        }

        header('Location:' . dir. 'producto/gestion');
    }
}
