<?php

class carro {

    private $marca;
    private $modelo;


    public function __construct($marca,$modelo){
        $this->marca=$marca;
        $this->modelo=$modelo;
    }

    public function mostrarDatos(){

        echo" este carro es de marca  ".$this->marca ." ". "y el modelo  ".$this->modelo ."<br>";
    }


}

$carro1 = new carro("chevrolet",2020);
$carro1->mostrarDatos();
 echo " hola como estas";
?>