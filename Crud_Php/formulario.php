  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class ="formulario-container">
  <form action="index.php" method="POST">
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
  </body>
  </html>
    

