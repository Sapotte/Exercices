<?php

define('SERVER' ,"sqlprive-pc2372-001.privatesql.ha.ovh.net");
define('USER' ,"cefiidev1236");
define('PASSWORD' ,"2aD9k7Xm");
define('BASE' ,"cefiidev1236");


try
{
$connexion = new PDO("mysql:host=".SERVER.";dbname=".BASE, USER, PASSWORD);
}
catch (Exception $e)
{
echo 'Erreur : ' . $e->getMessage();
}

echo 'Connecté(e)';