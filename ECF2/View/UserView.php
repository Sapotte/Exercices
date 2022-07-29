<?php

class UserView extends View{
    
    //  Affichage de la page d'accueil
    public function displayHome() {
        $this->page .= "<h1 class='text-center fw-bold text-decoration-underline mt-5'>Logiciel de gestion</h1>";
        $this->display();
    }

    // Affichage de la liste
    public function displayList($list) {
        $this->page .= "<form action='index.php?table=user&action=fiche' method='post'><label for='user' class='form-label'>Rechercher un utilisateur</label>";
        $this->page .= "<div class='form-group'><select class='form-control' name='user' id='user'>";
        $this->page .= "<option value''>Choisir un utilisateur</option>";
        foreach ($list as $element) {
          $this->page .="<option value=".$element['idUser'].">".$element['nomUser']." ".$element['prenomUser']."</option>";
        }
        $this->page .= "</select></div><button type='submit' class='btn btn-dark w-10 float-end mt-3'>Voir la fiche</button></form>";
        $this->display();
    }

    //Affichage fiche utilisateur
    public function displayFiche($item, $livre) {
        $this->page .= file_get_contents('html/ficheUser.html');
        $this->page = str_replace("{nom}", $item['nomUser'], $this->page);
        $this->page = str_replace("{prenom}", $item['prenomUser'], $this->page);
        $this->page = str_replace("{mail}", $item['mailUser'], $this->page);
        $this->page = str_replace("{id}", $item['idUser'], $this->page);

        $this->page .= "<div class='text-center'><h3>Livres empruntés</h3><table class='table'><thead><tr><th scope='col'>Titre</th><th scope='col'>Auteur</th><th scope='col'>Date d'emprunt</th></tr></thead><tbody>";
        foreach ($livre as $info) {
            $date = new DateTime("now");
            $emprunt = new DateTime($info["dateEmprunt"]);
            $interval = date_diff($emprunt, $date);
            $interval = $interval->format('%a');
            if($interval<"14") {
                $color = "black";
            } else if($interval>"21") {
                $color = "red";
            } else {
                $color = "orange";
            }
            $this->page .="<tr><td scope='row'>".$info['nomLivre']."</td>";
            $this->page .="<td>".$info['auteur']."</td>";
            $this->page .="<td style= 'color : ".$color."'>".$info['dateEmprunt']."</td>";
            $this->page .="<td><a href=index.php?table=user&action=restit&idLivre=".$info['idLivre']."&idUser=".$info['idUser'].">Restituer</a></td></tr>";
          }
        $this->page .= "</tbody></table></div>";
        if(count($livre)<"3"){
            $this->page .="<a href=index.php?table=livre&action=emprunt&id=".$item['idUser'].">Emprunter un livre</a>";
        } else {
            $this->page .= "<div>Le nombre maximum de livres empruntés est atteint</div>";
        }
        $this->display();
    }

    // Affichage formulaire
    public function displayForm($action, $id, $titre, $param, $disabled, $bouton) {
        $this->page .= file_get_contents('html/formUser.html');
        $this->page = str_replace("{action}", $action, $this->page);
        $this->page = str_replace("{id}", $id, $this->page);
        $this->page = str_replace("{titre}", $titre, $this->page);
        $this->page = str_replace("{nom}", $param['nomUser'], $this->page);
        $this->page = str_replace("{prenom}", $param['prenomUser'], $this->page);
        $this->page = str_replace("{mail}", $param['mailUser'], $this->page);
        $this->page = str_replace("{disabled}", $disabled, $this->page);
        $this->page = str_replace("{bouton}", $bouton, $this->page);
        $this->display();
    }

    // Affichage erreur
    public function errorDisplay() {
        $this->page .= "Une erreur est survenue";
    }
 
}