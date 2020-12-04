<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) : ?>
    <h1 class="text">Carrito de la comprar</h1>
    <table class="tabla-carrito">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Eliminar</th>
        </tr>
        <?php
        foreach ($carrito as $indice => $elemento) :
            $producto = $elemento['producto'];
        ?>
            <tr>
                <td>
                    <?php if ($producto->imagen != null) : ?>
                        <img src="<?= dir ?>cargas/<?= $producto->imagen ?>" class="zoom img-carrito">
                    <?php else : ?>
                        <img src="<?= dir ?>assets/img/camiseta2.png" class="img-carrito">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?= dir ?>producto/ver&id=<?= $producto->id ?>" class="text-sinanimacion"><?= $producto->nombre ?></a>
                </td>
                <td>
                    <p class="text-sinanimacion">$<?= $producto->precio ?></p>
                </td>
                <td class="text-sinanimacion">
                    <?= $elemento['unidades'] ?>
                    <div class="updown-unidades">
                        <a href="<?= dir ?>carrito/up&index=<?= $indice ?>" class="buttonmm">+</a>
                        <a href="<?= dir ?>carrito/down&index=<?= $indice ?>" class="buttonmm">-</a>
                    </div>
                </td>
                <td>
                    <a href="<?= dir ?>carrito/remove&index=<?= $indice ?>" class="button-red">Quitar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </br>
    <div class="total-carrito">
        <?php $stats = Utils::statsCarrito(); ?>
        <h3 class="text-sinanimacion">Precio total: $<?= $stats['total'] ?></h3>
    </div>
    <div class="acciones">
        <a href="<?= dir ?>carrito/delete_all" class="button-red">Vaciar carrito</a>
        <a href="<?= dir ?>pedido/hacer" class="button-green">Hacer pedido</a>
    </div>
<?php else : ?>
    <p class="text">El carrito está vacío, puede añadir productos</p>
<?php endif; ?>