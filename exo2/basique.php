<?php
require_once "abonnement.php";

class BasicAbonnement extends Abonnement
{

    public function __construct()
    {
        // rapelle du constructeur parent  pour restancier plus rapidement 
        parent::__construct(nom: "Basic", prixBase: 30);
    }

    function calculerPrixMensuel(): float
    {
        return $this->prixBase;
    }
}
