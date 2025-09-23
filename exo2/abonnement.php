<?php


abstract class Abonnement
{

    protected string $nom;
    protected float $prixBase;
    private bool $isActif;
    protected float $premierPaiement;

    //constructeur 
    public function __construct(string $nom = "inconu", float $prixBase = 30.00, bool $isActif = true, bool $premierPaiement = true)
    {
        $this->nom = $nom;
        $this->prixBase = $prixBase;
        $this->isActif = $isActif;
        $this->premierPaiement = $premierPaiement;
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

    
    public function payer(bool $premierPaiement): ?float{

        if(!$this->isActif()){
            echo "Paiement refuser : abonement suspendu \n";
            return null;
        }

        $montant = $this->calculerPrixMensuel();

        if($premierPaiement){
            $montant += 10;
            echo "Premier payement + 10 € de frais d'inscription \n";
        }else{

            echo "Pas premier payement\n";
        }

    
        if($montant <= 0 ){
            echo "Paiement refusé montant invalide \n ";
            return null; 
        }

        echo "Paiement accepté : " .$montant ." € \n" ;  

            return $montant;
    }
}
