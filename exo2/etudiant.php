<?php
require_once "abonnement.php";

class EtudiantAbonnement extends Abonnement
{

    public function __construct()
    {
        // rapelle du constructeur parent  pour restancier plus rapidement 
        parent::__construct(nom: "Etudiant", prixBase: 30);
    }

    function calculerPrixMensuel(): float
    {
        $prixReduction = $this->prixBase * 20 / 100;
        return $this->prixBase - $prixReduction;
    }
}
