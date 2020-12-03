<?php

require_once 'models/Pedido.php';

class pedidoController
{
    public function hacer()
    {
        require_once 'views/pedido/hacer.php';
    }

    public function add()
    {

        if (isset($_SESSION['identity'])) {
            $usuario_id = isset($_SESSION['identity']) ? $_SESSION['identity']->id : false;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $stats = Utils::statsCarrito();
            $coste = $stats['total'];
            if ($provincia && $direccion && $localidad) {
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setDireccion($direccion);
                $pedido->setLocalidad($localidad);
                $pedido->setCoste($coste);

                $save = $pedido->save();

                //Guardar línea pedido
                $save_linea = $pedido->save_linea();

                if ($save && $save_linea) {
                    $_SESSION['pedido'] = 'complete';
                } else {
                    $_SESSION['pedido'] = 'failed';
                }
            } else {
                $_SESSION['pedido'] = 'failed';
            }

            header('Location:' . dir . 'pedido/confirmado');
        } else {
            header('Location:' . dir);
        }
    }

    public function confirmado()
    {
        if (isset($_SESSION['identity'])) {
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);
            $pedido = $pedido->getOneByUser();
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($pedido->id);
        }

        require_once 'views/pedido/confirmado.php';
    }

    public function mis_pedidos()
    {

        Utils::isIdentity();

        $usuario_id = $_SESSION['identity']->id;

        $pedido = new Pedido();
        $pedido->setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle()
    {
        Utils::isIdentity();

        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            //Sacar el pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();

            //Sacar los productos
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($id);
            
            
            require_once 'views/pedido/detalle.php';
        } else {
            header("Location:" . dir . "pedido/mis_pedidos");
        }
    }

    public function gestion(){
        Utils::isAdmin();
        $gestion = true;

        $pedido = new Pedido();
        $pedidos = $pedido->getAll();
        require_once 'views/pedido/mis_pedidos.php';
    }

    public function estado(){
        Utils::isAdmin();
        if (isset($_POST['pedido_id']) && isset($_POST['estado'])) {
            
            
            $id = $_POST['pedido_id'];
            $estado = $_POST['estado'];

            //Update del pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);
            $pedido->update();

            header("Location:" .dir."pedido/detalle&id=".$id);

        }else{
            header("Location:" .dir);
        }
    }
}
