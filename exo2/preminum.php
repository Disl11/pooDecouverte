<?php

require_once "abonnement.php";

class PreminumAbonnement extends Abonnement
{


    public function __construct()
    {
        // rapelle du constructeur parent  pour restancier plus rapidement 
        parent::__construct(nom: "Preminum", prixBase: 50);
    }

    function calculerPrixMensuel(): float
    {
        return $this->prixBase;
    }
}
