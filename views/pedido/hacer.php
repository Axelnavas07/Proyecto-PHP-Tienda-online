<?php if (isset($_SESSION['identity'])) : ?>
    <h1 class="text">Hacer pedido</h1>
    <div class="div-centro">
    <p>
        <a href="<?= dir ?>carrito/index" class="text-sinanimacion">Ver los productos y el precio del pedido</a>
    </p>
    
    <form action="<?= dir ?>pedido/add" method="POST">

        <h3>Dirección para el envío</h3>
        </br>
        <label class="text-sinanimacion" for="provincia">Provincia</label><br>
        <input type="text" name="provincia" required class="espacio-texto" placeholder="Provincia"><br>

        <label class="text-sinanimacion" for="ciudad">Ciudad</label><br>
        <input type="text" name="localidad" required class="espacio-texto" placeholder="Cuidad"><br>

        <label class="text-sinanimacion" for="direccion">Dirección</label><br>
        <input type="text" name="direccion" required class="espacio-texto" placeholder="Direccion"><br>

        <input type="submit" value="Confirmar" class="btn">
    </form>
    </div>

<?php else : ?>
    <h1>Necesitas estar identificado</h1>
    <p>Necesitas estar logueado en la web para poder realizar tu pedido</p>
<?php endif ?>