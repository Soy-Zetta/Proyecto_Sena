<?php
session_start();
if(isset($_SESSION["usuario"])){
  echo'
  <script>
  window.location= "home.php"
  </script>
  ';

}


?>

<?php include_once("cabezera.php")   ?>
<a href="index.php" class="aplicacion">aplicacion web</a>
<h1>ingresa tu correo y contaseña</h1>

<main>
    <form action="validar_login.php" method="POST">
      <label for="">correo</label> 
      <br>
      <input type="text" name="correo" placeholder="correo@gmail.com" id="">
      <br>
      <label for="">contraseña</label>    
      <br>
      <input type="password" name="password" placeholder="*******" id="">
      <button type="submit">enviar</button><br>
      <a href=""> a olvidado su contraseña</a><br>

    <p>olividaste tu email / contraseña</p><br>

    <p>¿como te gustaria recuperarla? </p>

    <input type="radio" name="validar" id="validar_imput_1">
    <label for="validar_imput_1">email</label><br>

    <input type="radio" name="validar" id="validar_input_2">
    <label for="validar_input_2">mensaje de texto (sms)</label><br>

    <p>te enviaremos un email con intrucciines sobre como reestablecer tu contraseña</p>

    <input type="text" name="validar_correo" id="" placeholder ="correo@gmail.com"><br>
    <button type="submit">validar email</button><br>

    <a href="">no me acuerdo de mi email ni de mi telefono </a>

      
    </form>
    




     


</main>

    
<?php include_once("pie.php")  ?>