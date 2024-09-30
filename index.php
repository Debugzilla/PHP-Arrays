<?php

//esto llama una clase de otro fichero
require_once "sample.php";


    //instancia de la clase sayajin
    $goku = new Sayajin(nivel:1000, nombre:"Goku");
    echo $goku->Saludar(); //se accede al metodo nombre
    //los metodos son las variables que se usan en las clases

    echo "<br/><br/>";

    $vegeta = new Sayajin("Vegeta", 950);
    echo $vegeta->Saludar("Mi nombre es ");

    //metodo constructor es un metodo magico de PHP








?>