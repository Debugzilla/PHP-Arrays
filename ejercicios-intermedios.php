<?

//### Ejercicios intermedios
//1. **Funciones**: Crea una función que calcule el factorial de un número.
echo "Ejercicio 1 - Factorial de un numero";

function factorial($n){

    $cont = 1;
    $fact = 1;

    while($cont <= $n){
        $fact = $fact *$cont;
        $cont ++;
        
    }
    echo "El numero factorial de ". $n. "es = ". $fact;

}

factorial(10);



//2. **Arreglos**: Crea un array de números y muestra el mayor, el menor y el promedio.

//2. **Arreglos**: Crea un array de números y muestra el mayor, el menor y el promedio.
$ArrayNumeros = [20, 90, 1000];

echo "El valor minimo del array es ". min($ArrayNumeros) ."<br/>";
echo "El valor maximo del array es " .max($ArrayNumeros) . "<br/>";
echo "<br/><br/>";

$promedio = $ArrayNumeros[0] + $ArrayNumeros[1] + $ArrayNumeros[2] / 3 ."<br/>";
echo "El promedio del array es :" .$promedio . "<br/>";


//3. **Manejo de formularios**: Crea un formulario donde el usuario introduzca su nombre y edad, y muestra un mensaje personalizado.
//4. **POO básica**: Implementa una clase `Coche` con propiedades como `marca`, `modelo` y métodos como `arrancar()` y `detener()`.


class coche {
    public string $marca;
    public string $modelo;

    public function __construct(string $marca, string $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;


    }

    public function arrancar(){
        echo "Buuuum Buuuuuuum";
        echo "<br/>";
    }

    public function detener(){
        echo "Se ha apagado el motor";
        echo "<br/>";
    }


}

$cotxe = new coche("BMW", "M3");
$cotxe->arrancar();
$cotxe->detener();


// Imprimiendo las propiedades de la clase
echo "Marca del coche: " . $cotxe->marca . "<br/>";
echo "Modelo del coche: " . $cotxe->modelo . "<br/>";







//5. **Manejo de archivos**: Crea un script que lea y escriba datos en un archivo de texto.



?>