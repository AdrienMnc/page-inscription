<?php

require_once __DIR__ . "/Vendeur-class.php";

class Fournisseur extends Vendeur
{


    public int $agrement;

    public function __construct(string $nom, string $email, string $password, string $adresse, string $sasSarl, int $siret, int $agrement)
    {

        parent::__construct($nom, $email, $password, $adresse, $sasSarl, $siret);


        $this->agrement = $agrement;
    }
}
