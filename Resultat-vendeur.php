<?php

/* Imports */

require_once __DIR__ . "/Vendeur-class.php";


/* Traitement de la requête si le verbe HTTP est POST */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* Récupération des valeurs du body de la requête */
    $name = $_POST["nom"];
    $mail = $_POST["email"];
    $pswd = $_POST["password"];
    $adress = $_POST["adresse"];
    $sasSarl = $_POST["sasSarl"];
    $siret = $_POST["siret"];

    /* Création de l'instance  */
    $informations_vendeur = new Vendeur($name, $mail, $pswd, $adress, $sasSarl, $siret);
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
    <?php if (isset($informations_vendeur)) { ?>
        <h2>Vos informations ont bien étaient ajoutées en tant que Vendeur</h2>
        <p> Détails: </p>
        <ul>
            <li>Nom: <?= $informations_vendeur->nom; ?></li>
            <li>Email: <?= $informations_vendeur->email; ?></li>
            <li>Mot de passe: <?= $informations_vendeur->password; ?></li>
            <li>Adresse: <?= $informations_vendeur->adresse; ?></li>
            <li>SARL/SAS: <?= $informations_vendeur->sasSarl; ?></li>
            <li>SIRET: <?= $informations_vendeur->siret; ?></li>
        </ul>
    <?php } ?>

    <p><a href="index.php">Retourner à l'acceuil</a></p>

</body>

</html>