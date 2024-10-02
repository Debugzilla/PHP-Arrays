<?php

### Ejercicios básicos
//1**Hola, Mundo**: Crea un script que muestre "Hola, Mundo" en pantalla.
echo "Exercici 1: Mostrar Hola mundo" . "<br/>";
echo "Hola mundo" . "<br/>";
echo "<br/><br/>";

//2. **Variables y tipos de datos**: Declara variables de diferentes tipos (entero, flotante, cadena) y muéstralas en pantalla.
echo "Exercici 2";
echo "<br/<br/>";
$TipoInt = 20;
$tipoFloat = 3.14;
$Cadena = "Esto es un string";


echo $TipoInt;
echo "<br/>";
echo $tipoFloat;
echo "<br/>";
echo $Cadena . "<br/>";
echo "<br/<br/>";



//3. **Operadores aritméticos**: Realiza una calculadora simple que sume, reste, multiplique y divida dos números.
echo "Exercici 3";
echo "<br/<br/>";
$sumar = 20 + 10;
echo "La suma es :"."<br/<br/>";
echo $sumar;
echo "<br/<br/>";
$restar = 20 - 10;
echo "La resta es :" .$restar;
echo "<br/<br/>";
$multiplicar = 20 * 10;
echo "La multiplicacion es : ".$multiplicar;
echo "<br/<br/>";
$dividir = 20 / 10;
echo "La division es : ".$dividir;
echo "<br/<br/>";


//4. **Condicionales**: Crea un script que determine si un número es par o impar.
if ($n % 2 == 0){
    echo "Es un numero par";
} else {
    echo "No es un numero par";
}


//5. **Bucles**: Haz un programa que imprima los números del 1 al 100.

echo "<br/<br/>";
$num = 1;
while ( $num <= 100) {
    echo "$num";
    $num ++;
}







?>