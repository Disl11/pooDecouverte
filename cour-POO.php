<?php
class Animal {

    public string $nom; //string définir le type de la variable/attribut
    public int $age;


    //création du constructeur
    public function __construct($n ="inconnue", $a = 5){

        $this -> nom = $n;
        $this -> age = $a;

    }

    public function info(){

        echo "je suis un animal et je m'appel : " . $this->nom . " et j'ai ". $this->age . " ans \n" ;

    }
}

// +++++++ Avec construct +++++
$animal = new Animal("rex", 12);

$animal -> info();


//++++++++++ sans contstructeur. +++++++
// $animal = new Animal(); //creation d'objet

// $animal -> nom = "rex"; // assigner une props a nom

// $animal -> info();

// print_r($animal);


//++++++ heritage ++++++
class Chien extends Animal {

}


//appel de l'enfant (chien) de animal
$chien = new Chien(n:"jinka", a:10);
$chien -> info();

?>