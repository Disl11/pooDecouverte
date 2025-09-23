<?php
// ++++++++================= encapsulation ====================++++++++++
class ComptBancaire {
    
    private float $solde = 80;  // ici en private  


    //setter
    public function deposer($montant){
        $this->solde += $montant; 

    }

    //getter
    public function afficherSolde(){
        return "Votre solde est de : " . $this->solde . " € \n";
    }


    public function retirer($montant){
        
        $nouveauSolde = $this->solde - $montant;

        if ($nouveauSolde < -100){
            return "Vous ne pouvez pas depasser plus 100€ de decouvert ! \n";
        }else{
                    $this->solde = $nouveauSolde;
            return "retrais effectuer \n";
        }
    }
}

$monCompte = new ComptBancaire();
echo $monCompte-> afficherSolde();
$monCompte-> deposer(100);
// $monCompte-> solde = 100; // la variable est en private donc pas acces. ERREUR "cela sert a proteger les informations importante"
echo $monCompte-> afficherSolde();
echo $monCompte-> retirer(190);
echo $monCompte-> afficherSolde();
?>