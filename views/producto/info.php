<h3 class="text">Info</h3>
<div class="contenedor-info">
    <div class="detail-product">
        <div class="info-foto">
            <?php if ($prod->id != null) : ?>
                <?php if ($prod->imagen != null) : ?>
                    <img src="<?= dir ?>cargas/<?= $prod->imagen ?>" class="zoom">
                <?php else : ?>
                    <img src="<?= dir ?>assets/imgs/fondo.jpg">
                <?php endif; ?>
        </div>
        <div class="info-texto">
            <p class="text-sinanimacion tam-grande"><?= $prod->descripcion ?></p>
            <p class="text-sinanimacion tam-grande">$<?= $prod->precio ?></p>
            <p class="text-sinanimacion tam-grande">*Envio gratis</p><br>
            <a href="<?= dir ?>carrito/add&id=<?= $prod->id ?>" class="btn" id="btn-cent">Comprar</a>
        </div>
    <?php endif; ?>
    </div>
</div>

<div class="info-product">
<?php while ($prod2 = $prods_cat->fetch_object()) : ?>
    <?php if ($prod2->id != $prod->id) : ?>

        <div class="product">
            <?php if ($prod2->imagen != null) : ?>
                <img src="<?= dir ?>cargas/<?= $prod2->imagen ?>" class="zoom">
            <?php else : ?>
                <img src="<?= dir ?>assets/imgs/fondo.jpg">
            <?php endif; ?>
            <h3 class="letras tin-tre"><?= $prod2->nombre ?> </h3>
            <a href="<?= dir ?>producto/ver&id=<?= $prod2->id ?>&idc=<?= $prod2->categoria_id ?>" class="btn">Info</a>
        </div>
    <?php endif; ?>
<?php endwhile; ?>
</div>