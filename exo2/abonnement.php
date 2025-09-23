<?php


abstract class Abonnement
{

    protected string $nom;
    protected float $prixBase;
    private bool $isActif;

    //constructeur 
    public function __construct(string $nom = "inconu", float $prixBase = 30.00, bool $isActif = true)
    {
        $this->nom = $nom;
        $this->prixBase = $prixBase;
        $this->isActif = $isActif;
    }

    //méthode
    public function isActif(): bool
    {
        return $this->isActif;
    }

    public function suspendre(): void
    {
        $this->isActif = false;
    }

    public function reactive(): void
    {
        $this->isActif = true;
    }

    public function libelle(): string
    {
        return  $this->nom;
    }

    abstract function calculerPrixMensuel(): float;
}
