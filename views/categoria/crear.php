<h1 class="text">Crear Categoría</h1>

<div class="div-centro">
    <br>
<form action="<?= dir ?>categoria/save" method="POST">

    <label for="nombre" class="text-sinanimacion">Nombre</label><br>
    <input type="text" name="nombre" required placeholder="Categoria nueva" class="espacio-texto"><br>

    <input type="submit" value="Guardar" class="btn">
</form>
</div>