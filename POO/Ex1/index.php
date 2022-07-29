<?php

class Client 
{
    protected $nom;
    protected $societe;
    protected $commande;


    public function__construct($nom,$societe,$commande) 
    {
        $this->nom=$nom;
        $this->societe=$societe;
        $this->commande=$commande;
    }

    public function__destruct(){
        echo "Objet détruit";
    }

    public function affichage()
    {
        echo "Nom : ".$this->nom."</br>";
        echo "Société : ".$this->societe." </br>";
        echo "Commande : ".$this->commande."</br>"; 
    }
}

$client = new Client("client","société","commande");

echo $client->affichage()."</br>";