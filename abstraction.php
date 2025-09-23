<?php 
abstract class Utilisateur{

    public string $nom;
    public string $role;
    
    public function __construct($nom = "inconu", $role = "inconu") {

        $this-> nom = $nom;
        $this-> role = $role;
        
    }

    abstract public function bonjour();

        public function role(){
        echo "Salut " . $this->nom ." Ton role est ". $this->role . "\n";
    }
}



class Admin extends Utilisateur{

        public function bonjour(){
           echo "Salut " . $this->nom . "\n"; 
        } 
}


class Visiteur extends Utilisateur{
    
     public function bonjour(){
           echo "Salut " . $this->nom . "\n"; 
        } 
}


$admin = new Admin ("Elodie" , "admin");
$admin-> bonjour();
$admin-> role();

$visiteur = new Visiteur("Ludo", "visiteur");
$visiteur-> bonjour();
$visiteur-> role();
?>