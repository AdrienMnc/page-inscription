<?php

/* Imports */
require_once __DIR__ . "/Client-class.php";


/* Traitement de la requête si le verbe HTTP est POST */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* Récupération des valeurs du body de la requête */
    $name = $_POST["nom"];
    $mail = $_POST["email"];
    $pswd = $_POST["password"];
    $adress = $_POST["adresse"];


    /* Création de l'instance  */
    $informations_client = new Client($name, $mail, $pswd, $adress);
}



?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <title>Résultat formulaire</title>
</head>

<body>

    <!-- Affichage informations du client -->
    <?php if (isset($informations_client)) { ?>
        <h2>Vos informations ont bien étaient ajoutées en tant que client</h2>
        <p> Détails: </p>
        <ul>
            <li>Nom: <?= $informations_client->nom; ?></li>
            <li>Email: <?= $informations_client->email; ?></li>
            <li>Mot de passe: <?= $informations_client->password; ?></li>
            <li>Adresse: <?= $informations_client->adresse; ?></li>
        </ul>
    <?php } ?>

    <p><a href="index.php">Retourner à l'acceuil</a></p>

</body>

</html>