<?php

    class View {

        private $page;

         public function __construct() {
             $this->page = $this->searchHTML("header");
             $this->page .= $this->searchHTML("nav");
         }

        //  Affichage de la page d'accueil
        public function displayHome() {
            $this->page .= "Page d'accueil";
            $this->display();
        }


        // Affichage de la liste
        public function displayListe($list) {
            $this->page .="<table class ='table'><thead><tr><th>Identifiant</th><th>Nom</th><th>Prénom</th><th>Ville</th></tr></thead><tbody>";
            foreach ($list as $element) {
                $this->page .= "<tr><th>".$element["id"]."</th>";
                $this->page .= "<td>".$element["nom"]."</td>";
                $this->page .= "<td>".$element["prenom"]."</td>";
                $this->page .= "<td>".$element["ville"]."</td>";  
                $this->page .= "<td><a href=index.php?page=modif&id=".$element["id"]."><i class='fas fa-pen mr-2'></i></a></td>";
                $this->page .= "<td><a href=index.php?page=suppression&id=".$element["id"]." class='ml-2'><i class='fa-solid fa-trash'></i></a></td></²²tr>"; 
            }
            $this->page .= "</tbody></table>";
            $this->display();
        }

        // Affichage formulaire
        public function displayForm($page, $titre, $param, $disabled, $bouton, $id) {
            $this->page .= $this->searchHTML("form");
            $this->page = str_replace("{page}", $page, $this->page);
            $this->page = str_replace("{titre}", $titre, $this->page);
            $this->page = str_replace("{param0}", $param[0], $this->page);
            $this->page = str_replace("{param1}", $param[1], $this->page);
            $this->page = str_replace("{param2}", $param[2], $this->page);
            $this->page = str_replace("{id}", $id, $this->page);
            $this->page = str_replace("{disabled}", $disabled, $this->page);
            $this->page = str_replace("{bouton}", $bouton, $this->page);
            $this->display();
        }

        // Affichage page
        public function display() {
            $this->page .= $this->searchHTML("footer");
            echo $this->page;
        }

        // Ajout fichier HTML
        public function searchHTML($fichier) {
            $recup = file_get_contents("HTML/".$fichier.".html");
            return $recup;
        }
    };