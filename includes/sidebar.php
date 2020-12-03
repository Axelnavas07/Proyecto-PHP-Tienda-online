<aside id="lateral">
    <div id="carrito" class="block_aside">
        <h3>Mi carrito</h3>
        <ul>
            <?php $stats = Utils::statsCarrito(); ?>
            <li><a href="<?=dir?>carrito/index">Productos (<?=$stats['count']?>)</a> </li>
            <li><a href="<?=dir?>carrito/index">Total: $<?=$stats['total']?></a> </li>
            <li><a href="<?=dir?>carrito/index">Ver el carrito</a> </li>
        </ul>
    </div>
    <div id="login" class="block_aside">

        <?php if (!isset($_SESSION['identity'])) : ?>
            <h3>Entrar a la web</h3>
            <form action="<?=dir?>usuario/login" method="POST">
                <label for="email" class="text-sinanimacion">Email</label>
                <input type="email" name="email" class="espacio-texto" placeholder="Email">
                <label for="password" class="text-sinanimacion">Contraseña</label>
                <input type="password" name="password" class="espacio-texto" placeholder="Contraseña">
                <input type="submit" value="Enviar" class="btn">
            </form>
        <?php else :  ?>
            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
        <?php endif; ?>
        <ul>
            <?php if (isset($_SESSION['admin'])) :  ?>
                <li><a href="<?=dir?>categoria/index">Gestionar Categorías</a>
                </li>
                <li><a href="<?=dir?>producto/gestion">Gestionar productos</a>
                </li>
                <li><a href="<?=dir?>pedido/gestion">Gestionar pedidos</a>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['identity'])) : ?>
                <li>
                    <a href="<?=dir?>pedido/mis_pedidos">Mis pedidos</a>
                </li>
                <li>
                    <a href="<?=dir?>usuario/logout">Cerrar sesión</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?=dir?>usuario/registro">Registrarse</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</aside>

<div id="central">