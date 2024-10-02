<?php

//Exercici1
//crea un array, afegeixli 5 numeros enters i despres mostrals per pantalla
echo "<u>Exercici 1</u>" ."<br/>";
$Array1 = [10, 23, 99, 7, 50];
var_dump($Array1);
echo "<br/><br/>";
//Exercici2
//mostrar per pantalla la mida de l'array anterior i posteriorment elimina un element de l'array anterior.
//Després d'eliminar l'element, les claus senceres han de ser normalitzades ( reorganitzar els seus indexs).
//Mostrar per ultima vegada la mida de l'array
echo "<u>Exercici 2</u>" ."<br/>";
echo "Mostrar por pantalla el tamaño del array = ".count($Array1);
// Eliminar un element del array y reorganitzar els índexs
array_splice($Array1, 3, 1);
echo "Eliminamos el índice 3 con array_splice, y reorganizamos los índices:<br/>";
print_r($Array1);
// Mostrar el tamaño del array final
echo "Mostrar por pantalla el tamaño del array final = " . count($Array1);
echo "<br/><br/>";


//exercici3
//crea una funció que rebi com a parametres un array de paraules i un caracter.
//La funcio ens retorna true si totes les paraules dl array tenen el caracter passat com a segon caracter.

//Si tenim ["Hola", "Php", "Html"] retornara true si preguntem per "h" pero false si preguntem per "i".


function Buscarpalabra($array, $letras) {
 
    $array = ["Hola", "Php", "Html"];
    

    $palabras = [$array[0], $array[1], $array[2]];

  
    $encontrado = false;

    foreach ($palabras as $palabra) {
        for ($i = 0; $i < strlen($palabra); $i++) {
            if ($palabra[$i] == "H" || $palabra[$i] == "h") {
                if($letras == $palabra[$i]) {
                    $encontrado = true;
                    break 2;
                }
               
            }
        }
    }

 
    if ($encontrado) {
        echo "true";
    } else {
        echo "false";
    }
}



echo "<br/><br/>";

//$array = ["Hola", "Php", "Html"];
echo buscarpalabra([],"h");



//exercici4
//Fes un array asociatiu que representi informacio de tu mateix. En concret ha de incloure:
//Nom
//Edat
//email
//menjar favorit

$ArrayAssociatiu = [

    "Nom" => "Arnau",
    "Edat" => 28,
    "email" => "aerta7@gmail.com",
    "menjar_favorit" => "Burger"

];

echo $ArrayAssociatiu["Nom"];
echo $ArrayAssociatiu["Edat"];
echo $ArrayAssociatiu["email"];
echo $ArrayAssociatiu["menjar_favorit"];


























?>
