<?php

class Client
{
    public string $nom;
    public string $email;
    public string $password;
    public string $adresse;

    public function __construct(string $nom, string $email, string $password, string $adresse)
    {
        $this->nom = ucfirst($nom);
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->adresse = $adresse;
    }
}
