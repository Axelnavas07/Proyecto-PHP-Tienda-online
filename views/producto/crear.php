<h1 class="text">Crear nuevos productos</h1>
<div class="div-centro">
    <form action="<?= dir ?>producto/save" method="POST" enctype="multipart/form-data">
        <label class="text-sinanimacion" for="nombre">Nombre</label><br>
        <input class="espacio-texto" type="text" name="nombre" placeholder="Nombre del producto"><br>

        <label class="text-sinanimacion" for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" class="cuadro_des" placeholder="Descripcion del producto"></textarea><br><br>

        <label class="text-sinanimacion" for="stock">Stock</label><br>
        <input class="espacio-texto" type="number" name="stock" placeholder="La cantidad"><br>

        <label class="text-sinanimacion" for="precio">Precio</label><br>
        <input class="espacio-texto" type="text" name="precio" placeholder="Ingrese el precio"><br>

        <label class="text-sinanimacion" for="categoria">Categoria</label><br>
        <?php $categorias = Utils::showCategorias(); ?>
        <select name="categoria" class="espacio-texto" placeholder="Categoria">
            <?php while ($cat = $categorias->fetch_object()) : ?>
                <option value="<?= $cat->id ?>" class="letras-black">
                    <?= $cat->nombre ?>
                </option>
            <?php endwhile; ?>
        </select><br>
        <label class="text-sinanimacion" for="imagen">Imagen</label><br>
        <input type="file" name="imagen" class="upload-file-buton"><br>
        <label class="text-sinanimacion">Selecione una de las siguientes si quiere que su producto aparezca en la pagina principal</label><br>
        <input type="radio" class="radio-mod" name="destacados" value="Si">
        <label class="text-sinanimacion">Si</label><br>
        <input type="radio" class="radio-mod" name="destacados" value="No">
        <label class="text-sinanimacion">No</label><br>
        <br>
        <input class="btn" type="submit" value="Guardar">

    </form>
</div>