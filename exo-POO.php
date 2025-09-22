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
}

$utilisateur1 = new Utilisateur("Valentin");
$utilisateur1 -> bonjour();

$utilisateur2 = new Utilisateur("Pierre");
$utilisateur2 -> bonjour();


// ++++++ class admin ++++++
class Admin extends Utilisateur{
     
}


class Visiteur extends Utilisateur{

}

$admin = new Admin ("Elodie" , "admin");
$admin-> role();

$visiteur = new Visiteur("Ludo", "visiteur");
$visiteur-> role();

// ++++++++ encapsulation ++++++++++
class ComptBancaire {
    
    private float $solde = 80;  // ici en private  

    public function deposer($montant){
        $this->solde += $montant; 

    }

    public function afficherSolde(){
        return "Votre solde est de : " . $this->solde . " € \n";
    }
}

$monCompte = new ComptBancaire();
echo $monCompte-> afficherSolde();
$monCompte-> deposer(100);
// $monCompte-> solde = 100; // la variable est en private donc pas acces. ERREUR "cela sert a proteger les informations importante"
echo $monCompte-> afficherSolde();




?>