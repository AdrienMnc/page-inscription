<?php

class Vendeur
{
    public string $nom;
    public string $email;
    public string $password;
    public string $adresse;
    public string $sasSarl;
    public int $siret;

    public function __construct(string $nom, string $email, string $password, string $adresse, string $sasSarl, int $siret)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->adresse = $adresse;
        $this->sasSarl = $sasSarl;
        $this->siret = $siret;
    }
}
