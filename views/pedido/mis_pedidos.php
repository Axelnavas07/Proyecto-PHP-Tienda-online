<?php if (isset($gestion)) : ?>
    <h1 class="text">Gestionar pedidos</h1>
<?php else : ?>
    <h1 class="text">Mis pedidos</h1>
<?php endif; ?>
<div class="gestion-cat">
    <table class="tabla-carrito">
        <tr>
            <th>Numero Pedido</th>
            <th>Coste</th>
            <th>Fecha</th>
            <th>Estado</th>
        </tr>
        <?php
        while ($ped = $pedidos->fetch_object()) :
        ?>
            <tr>
                <td>
                    <a href="<?= dir ?>pedido/detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
                </td>
                <td>
                    $<?= $ped->coste ?>
                </td>
                <td>
                    <?= $ped->fecha ?>
                </td>
                <td>
                    <?= Utils::show_status($ped->estado) ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>