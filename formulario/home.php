
<?php 
    session_start();
    if(!isset($_SESSION["usuario"])){
        echo'
        <script>
        alert("por favor inicia sesion")
        window.location ="iniciosesion.php"
        </script>
        ';
        session_destroy();
        die();

    }
session_destroy()
?>  


<?php include_once("cabezera.php")   ?>

<h1>ESTAS EN LA PAGINA PRINCIPAL!! </h1>
<a href="cerrar.php">cerrar sesion</a>







<?php include_once("pie.php")  ?>


