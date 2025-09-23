<?php


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

        public function presentation(){
            echo "Bonjour je suis ". $this->nom . "\n";
    
    }
}


class Admin extends Utilisateur{

       

        public function presentation(){
            echo "je suis ". $this->nom . " Je suis un admin \n";
        }
}


class Visiteur extends Utilisateur{
    

}


$admin = new Admin ("Elodie" , "admin");
$admin-> bonjour();
$admin-> presentation();
$admin-> role();

$visiteur = new Visiteur("Ludo", "visiteur");
$visiteur-> bonjour();
$visiteur-> presentation();
$visiteur-> role();

?>