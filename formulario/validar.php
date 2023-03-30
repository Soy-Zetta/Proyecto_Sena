<?php


include_once("conexion.php");

if(isset($_POST["nombre"])&& isset($_POST["correo"]) && isset($_POST["direccion"])&&
isset($_POST["edad"])&& isset($_POST["contraseña"])){
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$edad=$_POST["edad"];
$password=$_POST["contraseña"];


    $contrasenaEncriptada= hash('sha512',$password);    





$sql="INSERT INTO usuarios( nombre, correo,direccion,edad,contraseña)
      VALUES('$nombre','$correo','$direccion','$edad', '$contrasenaEncriptada')";

//varificar que el correo no se repita 
$verificarDatos= mysqli_query($conn,"SELECT*FROM usuarios WHERE correo = '$correo'");
$verificarRows =mysqli_num_rows($verificarDatos);
if(mysqli_num_rows($verificarDatos) > 0){ 
    echo
    '<script>
    alert("el correo ya esta registrado") 
    window.location = "formulario.php"
    </script>';
    
    exit();
}


//insercion de datos a la base de datos usuarios ,preparar consulta 

$ejecutar =mysqli_query($conn,$sql);

if($ejecutar){
    echo"usuario registrado correctamente";
    echo '<script>
    window.location= "iniciosesion.php"
    </script>';

}else{
    echo "Error".$sql. "<br>".mysqli_error($conn);
}



 


}
//print_r($verificarRows);

mysqli_close($conn)
?>


