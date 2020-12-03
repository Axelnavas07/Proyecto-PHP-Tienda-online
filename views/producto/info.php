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