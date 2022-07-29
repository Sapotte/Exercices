<?php

    class View {

        private $page;

         public function __construct() {
             $this->page = $this->searchHTML("header");
             $this->page .= $this->searchHTML("nav");
         }

        public function displayHome() {
            $this->page .= "Page d'accueil";
            $this->display();
        }

        public function displayListe() {
            $this->page .= "Liste";
            $this->display();
        }

        public function displayAjout() {
            $this->page .= "Ajout";
            $this->display();
        }

        public function display() {
            $this->page .= $this->searchHTML("footer");
            echo $this->page;
        }

        public function searchHTML($fichier) {
            $recup = file_get_contents("HTML/".$fichier.".html");
            return $recup;
        }
    };