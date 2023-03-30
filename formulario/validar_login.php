<?php
include_once("conexion.php");
session_start();

$correo = $_POST["correo"];
$password=$_POST["password"];
$contraseña_encrptitada= hash("sha512",$password);

$validar_login = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña_encrptitada'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION["usuario"]=$correo;
    header("location:home.php");
    exit;
}else{
    echo ' 
    <script> 
    alert("correo o contraseña incorrectos, por favor verifiquelos ")
    window,location= "iniciosesion.php"
    </script>
    ';
    exit();

}

?>