<?php

// ++++++=============== heritage ================++++++
class Utilisateur{

    public string $nom;
    public string $role;
    
    public function __construct($nom = "inconu", $role = "inconu") {

        $this-> nom = $nom;
        $this-> role = $role;
        
    }

    public function bonjour(){
        echo "Salut " . $this->nom . "\n";
    }

        public function role(){
        echo "Salut " . $this->nom ." Ton role est ". $this->role . "\n";
    }
}

$utilisateur1 = new Utilisateur("Valentin");
$utilisateur1 -> bonjour();

$utilisateur2 = new Utilisateur("Pierre");
$utilisateur2 -> bonjour();



class Admin extends Utilisateur{
     
}


class Visiteur extends Utilisateur{

}

$admin = new Admin ("Elodie" , "admin");
$admin-> role();

$visiteur = new Visiteur("Ludo", "visiteur");
$visiteur-> role();









?>