<?php

class Fournisseur
{
    public string $nom;
    public string $email;
    public string $password;
    public string $adresse;
    public string $sasSarl;
    public int $siret;
    public int $agrement;

    public function __construct(string $nom, string $email, string $password, string $adresse, string $sasSarl, int $siret, int $agrement)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->adresse = $adresse;
        $this->sasSarl = $sasSarl;
        $this->siret = $siret;
        $this->agrement = $agrement;
    }
}
