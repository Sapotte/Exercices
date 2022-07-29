<?php

class LivreView extends View{
    

    // Affichage de la liste
    public function displayList($list) {
        $this->page .= "<form action='index.php?table=livre&action=fiche' method='post'><label for='livre' class='form-label'>Rechercher un livre</label>";
        $this->page .= "<div class='form-group'><select class='form-control' name='livre' id='livre'>";
        $this->page .= "<option value''>Choisir un livre</option>";
        foreach ($list as $element) {
          $this->page .="<option value=".$element['idLivre'].">".$element['nomLivre']." de ".$element['auteur']."</option>";
        }
        $this->page .= "</select></div><button type='submit' class='btn btn-dark w-10 float-end mt-3'>Voir la fiche</button></form>";
        $this->display();
    }

    //Affichage fiche livre
    public function displayFiche($item, $emprunteur) {
        $this->page .= file_get_contents('html/ficheLivre.html');
        $this->page = str_replace("{titre}", $item['nomLivre'], $this->page);
        $this->page = str_replace("{auteur}", $item['auteur'], $this->page);
        $this->page = str_replace("{emprunteur}", $emprunteur, $this->page);
        $this->page = str_replace("{nom}", $item['idLivre'], $this->page);
        $this->display();
    }    

    // Affichage formulaire
    public function displayForm($action, $id, $titre, $param, $disabled, $bouton) {
        $this->page .= file_get_contents('html/formLivre.html');
        $this->page = str_replace("{action}", $action, $this->page);
        $this->page = str_replace("{id}", $id, $this->page);
        $this->page = str_replace("{titre}", $titre, $this->page);
        $this->page = str_replace("{nom}", $param['nomLivre'], $this->page);
        $this->page = str_replace("{auteur}", $param['auteur'], $this->page);
        $this->page = str_replace("{disabled}", $disabled, $this->page);
        $this->page = str_replace("{bouton}", $bouton, $this->page);
        $this->display();
    }

    // Affichage de la liste livres à emprunter
    public function displayListEmprunt($list, $id) {
        $this->page .= "<form action='index.php?table=livre&action=empruntDB&id=".$id."' method='post'><label for='livre' class='form-label'>Rechercher un livre disponible</label>";
        $this->page .= "<div class='form-group'><select class='form-control' name='livre' id='livre'>";
        $this->page .= "<option value''>Choisir un livre</option>";
        foreach ($list as $element) {
          $this->page .="<option value=".$element['idLivre'].">".$element['nomLivre']." de ".$element['auteur']."</option>";
        }
        $this->page .= "</select></div><button type='submit' class='btn btn-dark w-10 float-end mt-3'>Emprunter le livre</button></form>";
        $this->display();
    }

    // Affichage erreur
    public function errorDisplay() {
        $this->page .= "Une erreur est survenue";
    }
 
}