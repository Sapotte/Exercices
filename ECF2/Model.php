<?php

abstract class Model {
    protected $connection;
    protected $requete;

    public function __construct()
    {
        define('SERVER', "sqlprive-pc2372-001.privatesql.ha.ovh.net");
        define('USER', "cefiidev1236");
        define('PASSWORD', "2aD9k7Xm");
        define('BASE', "cefiidev1236");

        try {
            $this->connection = new PDO
                ("mysql:host=".SERVER.";dbname=".BASE, USER, PASSWORD);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur:'.$e->getMessage());
        }
    }
}