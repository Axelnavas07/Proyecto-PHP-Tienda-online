<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    <h1 class="text">Tu pedido se ha confirmado</h1>
    <p class="text-sinanimacion">Tu pedido ha sido guardado con exito, una vez finalizada la tranferencia bancaria, el pedido
        será procesado y enviado </p>
    <br>
    <?php if (isset($pedido)) : ?>
        <h3 class="text-sinanimacion">Datos del pedido:

        Número del pedido: <?= $pedido->id ?> <br>
        Total a pagar: $<?= $pedido->coste ?> <br>
        Productos: <br></h3>
        <table class="tabla-carrito">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
            </tr>
            <?php while ($producto = $productos->fetch_object()) : ?>
                <tr>
                    <td>
                        <?php if ($producto->imagen != null) : ?>
                            <img src="<?= dir ?>cargas/<?= $producto->imagen ?>" class="img-carrito">
                        <?php else : ?>
                            <img src="<?= dir ?>assets/img/camiseta2.png" class="img-carrito">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= dir ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                    </td>
                    <td>
                        $<?= $producto->precio ?>
                    </td>
                    <td>
                        <?= $producto->unidades ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'comfir') :  ?>
    <h1>El pedido no ha sido procesado</h1>
<?php endif; ?>