<?php

    class Sayajin{
//atributs de la clase sayajin
        public string $classe ="Sayajin";


        public  $nombre ="Goku";
        public  $nivel_pelea = 1000;

        public function __construct($nombre, $nivel_pelea){
            $this->nombre =$nombre;
            $this->nivel_pelea=$nivel_pelea;

        }
        //este metodo se ejecuta cuando instanciamos una clase
        //se usa para definir o dar valor a los atributos que tenemos en una clase

         
        

        public function Saludar($texto="Hola soy "){

            return $texto.$this-> nombre;
//con $this podem accedir als metodes o atributs

        }


        public function NiveldePelea() {

            return $this-> nombre." tiene un nivel de pelea de " .$this->nivel_pelea. "y pertenece a la classe "  .$this->classe;

        }

    }

    class SuperSayajin extends Sayajin{

        public string $classe ="Super sayajin";


        public function Transformacion(){
            if($this->nivel_pelea>=1500){
                $texto=$this->nombre. " se transformo en " .$this->classe;
            } else {
                $texto=$this->nombre. " se transformo en " .$this->classe;
            }

            return $texto;
        }



    }



    //instancia de la clase sayajin
    $goku = new Sayajin(nivel_pelea:1000, nombre:"Goku");
    echo $goku->NiveldePelea(); //se accede al metodo nombre
    //los metodos son las variables que se usan en las clases

    echo "<br/><br/>";

    $vegeta = new Sayajin("Vegeta", nivel_pelea: 950);
    echo $vegeta->NiveldePelea();

    //metodo constructor es un metodo magico de PHP
    echo "<br/><br/>";

    $gohan = new SuperSayajin(nivel_pelea:1900, nombre:"Gohan");
    echo $gohan->NiveldePelea();













    
?>