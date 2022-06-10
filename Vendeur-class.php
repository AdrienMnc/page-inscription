<?php

require_once __DIR__ . "/Client-class.php";

class Vendeur extends Client
{

    public string $sasSarl;
    public int $siret;


    public function __construct(string $nom, string $email, string $password, string $adresse, string $sasSarl, int $siret)
    {

        parent::__construct($nom, $email, $password, $adresse);

        $this->sasSarl = $sasSarl;
        $this->siret = $siret;
    }
}
