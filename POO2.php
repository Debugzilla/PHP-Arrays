<?php

//necessitem crear un tipus de dades animal.
//Els animals tenen un nom, ara bé no es el mateix
//el so d'un gos que el de un gat.
//per tant necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments
//Basicament volem un metode makesound() que mostri un missatge diferent si es tracta d'un gos o d'un gat

abstract class animal{


    abstract public function makesound(); 



}


class perro extends animal{
    public function makesound()
    {
        return "guau guau";
    }

}


class gato extends animal{
    public function makesound()
    {
        return "miau miau";
    }
}


$gat = new gato;
echo "El sonido del gato es :". $gat->makesound();

echo "<br/><br/>";

$gos = new perro;
echo "El sonido del perro es :".$gos->makesound();







?>