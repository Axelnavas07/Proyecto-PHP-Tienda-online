<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'Complete') : ?>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>Registro completado correctamente</strong>
</div>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>Registro fallido, introduce bien los datos</strong>
</div>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>
<?php while ( $prod = $productos->fetch_object()) : ?>

<div class="product">
  <a href="<?= dir ?>producto/ver&id=<?= $prod->id ?>">
    <?php if ($prod->imagen != null) : ?>
      <img src="<?= dir ?>cargas/<?= $prod->imagen ?>" class="zoom">
    <?php else : ?>
      <img src="<?= dir ?>assets/imgs/fondo.jpg">
    <?php endif; ?>
    <h3><?= $prod->nombre ?></h3>
  </a>
  <h3>$<?= $prod->precio ?></h3>
  <a href="<?= dir ?>carrito/add&id=<?= $prod->id ?>" class="btn">Comprar</a>
  <a href="<?= dir ?>producto/ver&id=<?= $prod->id ?>&idc=<?=$prod->categoria_id?>" class="btn">Info</a>
</div>
<?php endwhile; ?>