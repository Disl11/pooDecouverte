<?php
// Compte courant compte épargne
// COmpte bancaire en abstract
// Ajouter frais bancaires
// Abstract method pour modifier les frais
// Method pour afficher les frais dans la classe abstract

 abstract class ComptBancaire {
    
    protected float $solde = 0;  // ici en protect
    private float $fraibancaire = 0;

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
        
              $this->fraisBancaire(); // On appeler notre function ici pour que a chaque retrait il y un frais 
              return "retrais effectuer \n";
        }
    }

    abstract function fraisBancaire();
}

class CompteCourant extends ComptBancaire{
    public function fraisBancaire(){
        $this-> solde -= 1;
        echo "1 euros de frais a été prelever sur votre compte courant \n";
    }

}

class CompteEpargne extends ComptBancaire{
    public function fraisBancaire(){

            $this-> solde -= 2;
            echo "2 euros de frais a été prelever sur votre compte Epargne \n";
        
    }
}


$monCompte = new CompteCourant();
$monCompte-> deposer(200);
echo $monCompte-> afficherSolde();
echo $monCompte-> retirer(20);
echo $monCompte-> afficherSolde();

echo "------------------------------ \n";

$compteEpargne = new CompteEpargne();
$compteEpargne-> deposer(150);
echo $compteEpargne->afficherSolde();
echo $compteEpargne->retirer(25);
echo $compteEpargne->afficherSolde();


?>