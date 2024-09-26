<?php

//Exercici1
//crea un array, afegeixli 5 numeros enters i despres mostrals per pantalla
echo "<u>Exercici 1</u>" ."<br/>";
$Array1 = [10, 23, 99, 7, 50];
var_dump($Array1);

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



































?>
