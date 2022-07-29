<?php

class personne
{

    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom,$prenom,$age) 
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
    }

    public function affichage(){
        echo "Nom : .".$this->nom."</br>Prénom : ".$this->prenom."</br>";
    }

}

class homme extends personne
{
    private $sexe = "homme";

    public function __construct($nom,$prenom,$age)
    {
        parent::__construct($nom,$prenom,$age);
    }

    public function sexe()
    {
        parent::affichage();
        echo "Sexe :".$this->sexe."</br>";
    }
}

class femme extends personne
{
    private $sexe = "femme";

    public function __construct($nom,$prenom,$age)
    {
        parent::__construct($nom,$prenom,$age);
    }

    public function sexe()
    {
        parent::affichage();
        echo "Sexe :".$this->sexe."</br>";
    }
}

$homme = new homme("NomHomme","PrénomHomme","AgeHomme");
$femme = new femme("NomFemme","PrénomFemme","AgeFemme");

echo "{$homme->sexe()}</br>";
echo "{$femme->sexe()}</br>";