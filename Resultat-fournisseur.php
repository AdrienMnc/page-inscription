<?php

/* Imports */

require_once __DIR__ . "/Fournisseur-class.php";


/* Traitement de la requête si le verbe HTTP est POST */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* Récupération des valeurs du body de la requête */
    $name = $_POST["nom"];
    $mail = $_POST["email"];
    $pswd = $_POST["password"];
    $adress = $_POST["adresse"];
    $sasSarl = $_POST["sasSarl"];
    $siret = $_POST["siret"];
    $agrement = $_POST["agrement"];

    /* Création de l'instance */
    $informations_fournisseur = new Fournisseur($name, $mail, $pswd, $adress, $sasSarl, $siret, $agrement);
}

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat formulaire</title>
</head>

<body>

    <!-- Affichage informations du vendeur -->
    <?php if (isset($informations_fournisseur)) { ?>
        <h2>Vos informations ont bien étaient ajoutées en tant que Fournisseur</h2>
        <p> Détails: </p>
        <ul>
            <li>Nom: <?= $informations_fournisseur->nom; ?></li>
            <li>Email: <?= $informations_fournisseur->email; ?></li>
            <li>Mot de passe: <?= $informations_fournisseur->password; ?></li>
            <li>Adresse: <?= $informations_fournisseur->adresse; ?></li>
            <li>SARL/SAS: <?= $informations_fournisseur->sasSarl; ?></li>
            <li>SIRET: <?= $informations_fournisseur->siret; ?></li>
            <li>N° d'agrément: <?= $informations_fournisseur->agrement; ?></li>
        </ul>
    <?php } ?>

    <p><a href="index.php">Retourner à l'acceuil</a></p>

</body>

</html>