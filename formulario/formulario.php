<?php include_once("cabezera.php")   ?>
<a href="index.php" class="aplicacion">aplicacion web</a>
<h1> ingrese sus datos</h1>
    <div class ="formulario-container">
    <form action="validar.php" method = "POST">
        <legend>datos personales </legend><br>
        <label for="">nombre :</label><br>
        <input type="text" name="nombre" id=""required>
        <br>
        <label for="">correo :</label><br>
        <input type="email" name="correo" id=""required>
        <br>
        <label for="">direccion :</label><br>
        <input type="text" name="direccion" id=""required>
        <br>
        <label for="">edad :</label><br>
        <input type="number" name="edad" id=""required>
        <br>
        <label for="">contraseña :</label><br>
        <input type="password" name="contraseña" id=""required>
        <br>    
        <button type="submit">enviar</button>
    
    </form>
    </div>
    <?php include_once("pie.php")  ?>