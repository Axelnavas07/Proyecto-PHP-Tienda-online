
    <?php if (isset($categoria)) : ?>
        <?php if ($productos->num_rows == 0) : ?>
            <p class="text">No hay productos para mostrar</p>
        <?php else : ?>
            <h1 class="text"><?= $categoria->nombre ?></h1>
            <?php while ($prod = $productos->fetch_object()) : ?>
                <div class="product">
                    <?php if ($prod->imagen != null) : ?>
                        <img src="<?= dir ?>cargas/<?= $prod->imagen ?>" class="zoom">
                    <?php else : ?>
                        <img src="<?= dir ?>assets/imgs/fondo.jpg">
                    <?php endif; ?>
                    <h3 class="letras tin-tre"><?= $prod->nombre ?></h3>
                    <h3 class="letras tin-tre"><?= $prod->precio ?></h3>
                    <a href="<?= dir ?>carrito/add&id=<?= $prod->id ?>" class="btn">Comprar</a>
                    <a href="<?= dir ?>producto/ver&id=<?= $prod->id ?>&idc=<?= $prod->categoria_id ?>" class="btn">Info</a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php else : ?>
        <h1>La categoria no existe</h1>
    <?php endif; ?>