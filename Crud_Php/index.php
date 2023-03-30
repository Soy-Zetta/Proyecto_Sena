<?php

//conexion a la base de datos 
include_once("conexion.php");

//captura de datos del formulario 
if(isset($_POST["nombre"])&& isset($_POST["correo"]) && isset($_POST["direccion"])&&
isset($_POST["edad"])&& isset($_POST["contraseña"])){
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$edad=$_POST["edad"];
$password=$_POST["contraseña"];
}else{echo("no se encontraron datos ");
}


//impresion de datos capturados 
echo("el nombre es ".$nombre. "<br>");
echo("el correo es ".$correo ."<br>");

echo("la direccion es ".$direccion. "<br>");
echo("la edad es ".$edad. "<br>");
echo("la contraseña es ".$password. "<br>");


//insercion de datos a la base de datos usuarios ,preparar consulta 

$sql="INSERT INTO usuarios(
    id_usuario,
    nombre,
    correo,
    direccion,
    edad,
    contraseña)
   
   VALUES (
    NULL,
    '$nombre',
   ' $correo',
   ' $direccion',
    '$edad',
    '$password'
    )";

    if(mysqli_query($conn,$sql)){
        echo"registro insertado correctamente";
    } else {echo "Error".$sql. "<br>".mysqli_error($conn);
    }


  $arreglo =[1,2,3,4,5,6];

?>