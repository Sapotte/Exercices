<?php

class Client {

    public $nom;
    public $societe;
    public $commande;


    public function __construct($nom,$societe,$commande) 
    {
        $this->nom=$nom;
        $this->societe=$societe;
        $this->commande=$commande;
    }


    public function affichage()
    {
        echo "Nom : ".$this->nom."</br>";
        echo "Société : ".$this->societe." </br>";
        echo "Commande : ".$this->commande."</br>"; 
    }
}

$client = new Client("client","société","commande");

echo "{$client->affichage()}</br>";