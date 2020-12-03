<h1 class="text">Gestionar categorías</h1>
<br>

<div class="gestion-cat">


    <table class="tabla-carrito">
        <br>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php while ($cat = $categorias->fetch_object()) : ?>
            <tr>
                <td>
                    <?= $cat->id; ?>
                </td>
                <td>
                    <?= $cat->nombre; ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="<?= dir ?>categoria/crear" class="btn gestion-cat-button">Crear categoria</a>
</div>