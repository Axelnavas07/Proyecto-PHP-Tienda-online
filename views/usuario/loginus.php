<div class="div-centro">
    <h1 class="text font-size">Pagina de ingreso</h1>
    <form class="formreg" action="<?= dir ?>usuario/login" method="POST">
        <p><label><b class="text-sinanimacion">Escriba su email</b>
            </label><br>
            <input type="text" name="email" class="espacio-texto" placeholder="Email">
            <br><br>
            <label><b class="text-sinanimacion">Contraseña</b>
            </label>
            <br>
            <input type="password" name="password" class="espacio-texto" placeholder="Contraseña"><br>         
            <br><br>
            <input type="submit" name="log" class="btn" value="Ingrese"><br>
            <br>
            <a href="<?= dir ?>usuario/registro" class="tin-tre">
                <h4>Registrarse</h5>
            </a>
            <br>
            <span>Olvido su contraseña</span>
            <br><br>
            <div class="check">
                <input id="myCheck" type="checkbox" onclick="myFunction()">
                <span id="spn myCheck" for="myCheck" class="text-sinanimacion">Recuerdame</span>
                <p id="text" style="display:none" class="text-sinanimacion">La proxima vez que entre en la pagina se va a realizar el login automaticamente</p>
                
                <br><br>
            </div>
            <br><br><br>
        </p> 
    </form>
</div> 