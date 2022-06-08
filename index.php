<?php
require_once __DIR__ . "/Client-class.php";
require_once __DIR__ . "/Vendeur-class.php";
require_once __DIR__ . "/Fournisseur-class.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscriptions</title>
</head>

<body>

    <!-- Selection du formulaire adequate -->
    <form action="" method="POST">
        <select name="selectForm" id="" onChange="this.form.submit();">
            <option value="" selected> --- Choisissez votre formulaire --- </option>
            <option value="1">Client</option>
            <option value="2">Vendeur</option>
            <option value="3">Fournisseur</option>


        </select>

    </form>


    <?php

    if (isset($_POST['selectForm'])) {
        $choix = ceil($_POST['selectForm']);
    } else {
        $choix = null;
    }

    if ($choix == "1") { ?>

        <!-- Entrées les données du client -->
        <p>Formulaire Client:</p>
        <form action="Resultat-client.php" method="POST">

            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="text" name="adresse" placeholder="Adresse">

            <button type="submit">Envoyer</button>
        </form>

    <?php } else if ($choix == "2") { ?>

        <!-- Entrées les données du vendeur -->
        <p>Formulaire Vendeur:</p>
        <form action="Resultat-vendeur.php" method="POST">

            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="password" placeholder="Mot de passe">
            <input type="text" name="adresse" placeholder="Adresse">
            <input type="text" name="sasSarl" placeholder="SAS/SARL">
            <input type="number" name="siret" placeholder="siret">

            <button type="submit">Envoyer</button>
        </form>

    <?php } else if ($choix == "3") { ?>
        <!-- Entrées les données du fournisseur -->
        <p>Formulaire Fournisseur:</p>
        <form action="Resultat-fournisseur.php" method="POST">

            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="password" placeholder="Mot de passe">
            <input type="text" name="adresse" placeholder="Adresse">
            <input type="text" name="sasSarl" placeholder="SAS/SARL">
            <input type="number" name="siret" placeholder="siret">
            <input type="number" name="agrement" placeholder="N° d'agrément">


            <button type="submit">Envoyer</button>
        </form>
    <?php } ?>

</body>

</html>