<h1 class="text">Gestión de productos</h1>


<div class="gestion-cat">
    <?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete') : ?>
        <div class="alert_green">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong> Registro completado correctamente</strong>
        </div>

    <?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete') : ?>
        <div class="alert_red">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Registro fallido, introduce bien los datos</strong>
        </div>
    <?php endif; ?>




    <?php Utils::deleteSession('producto'); ?>
    <table class="w3-light-grey tam">
        <thead>
            <tr>
                <th class="text-sinanimacion">ID</th>
                <th class="text-sinanimacion">Nombre</th>
                <th class="text-sinanimacion">Precio</th>
                <th class="text-sinanimacion">Stock</th>
                <th class="text-sinanimacion">Acciones</th>
            </tr>
        </thead>
        <?php while ($prod = $productos->fetch_object()) : ?>
            <tr>
                <td class="text-sinanimacion">
                    <?= $prod->id; ?>
                </td>
                <td class="text-sinanimacion">
                    <?= $prod->nombre; ?>
                </td>
                <td class="text-sinanimacion">
                    <?= $prod->precio; ?>
                </td>
                <td class="text-sinanimacion">
                    <?= $prod->stock; ?>
                </td>
                <td class="text-sinanimacion">
                    <a href="<?= dir ?>producto/editar&id=<?= $prod->id ?>" class="btn">Editar</a><br>
                    <br><a href="<?= dir ?>producto/eliminar&id=<?= $prod->id ?>" class="btn">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="<?= dir ?>producto/crear" class="btn gestion-cat-button">Crear producto</a>
</div>