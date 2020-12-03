

<div class="div-centro">

    <form action="<?=dir?>usuario/guardar" method="POST" id="formreg">
        <h1 class="text">Registro</h1>
        <label class="text-sinanimacion" for="nombre">Nombre</label><br>
        <input class="espacio-texto" type="text" name="nombre" placeholder="Ingrese su nombre" required><br>

        <label class="text-sinanimacion" for="apellidos">Apellidos</label><br>
        <input class="espacio-texto" type="text" name="apellidos" placeholder="Ingrese su apellidos" required><br>

        <label class="text-sinanimacion" for="email">Email</label><br>
        <input class="espacio-texto" type="email" name="email" placeholder="Ingrese su email" required><br>

        <label class="text-sinanimacion" for="password">Contraseña</label><br>
        <input class="espacio-texto" type="password" name="password" placeholder="Ingrese su contraseña" required><br>
        <br>
        <input class="btn bin-bre" id="register" type="submit" value="registrarse"><br>
        <p><a href="<?=dir?>usuario/formlog" class="hyper tin-tre">Ya tienes cuenta</a>.</p>
        <hr>
    </form>

</div>