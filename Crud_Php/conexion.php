<?php
$user="root";
$server="localhost";
$password="";
$database="usuarios";
$conn= mysqli_connect($server,$user,$password,$database);


if(!$conn){
    die("conexion fallida".mysqli_connect_error());
}

?>