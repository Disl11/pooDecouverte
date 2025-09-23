<?php

// On veut gérer des abonnements d’une salle de sport.
// Chaque abonnement a un prix mensuel différent.
// Lors du premier paiement, on ajoute des frais d’inscription.
// Si l’abonnement est suspendu, on refuse le paiement avec un message explicite.
//  * Simule le paiement d’un abonnement.

//  * Règles à respecter :
//  - Si abonnement inactif : afficher "Paiement refusé : abonnement suspendu" puis retourner null.
//   - Montant = prix mensuel + 10.0 si $premierPaiement est vrai.
//   - Si montant final <= 0 : afficher "Paiement refusé : montant invalide" puis retourner null.
//   - Sinon retourner le montant payé.

// crée une class static puis appeler le nom de la classe:: nom_méthode

// function payer(Abonnement $abonnement, bool $premierPaiement): ?float
// {
// À implémenter selon selon les règles ci-dessus.

// Démonstration
// $basic = new Basic();

// $premium = new Premium();

// $etudiant = new Etudiant();

// Appeler : payer($abo, true) pour chacun et afficher :

// le libelle() de l’abonnement,

// le montant retourné si non nul.

// Suspendre un abonnement, tester un paiement (doit afficher refus).


require_once "basique.php";
require_once "preminum.php";
require_once "etudiant.php";


$basique = new BasicAbonnement();
$premnium = new PreminumAbonnement();
$etudiant = new EtudiantAbonnement();


//Tableau 
$abonnement = [$premnium, $basique, $etudiant];


$basique->payer(true);
$premnium->payer(false);
$etudiant->suspendre();
$etudiant->payer(true);

// boucle foreach pour afficher tout les abonnement sans rondondance du code 
foreach ($abonnement as $abonnement) {

    echo "Abonnement : " . $abonnement->libelle() . "\n";
    echo "Statut : " . ($abonnement->isActif() ? " Actif \n" : "Suspendu" . "\n");
    echo " Prix : " . $abonnement->calculerPrixMensuel();
    echo " \n -------------------- \n";
}
