<?php

abstract class View{

    protected $page;

    public function __construct() {
        $this->page = file_get_contents("html/header.html");
        $this->page .= file_get_contents("html/nav.html");
    }

    // Affichage page avec ajout footer
    public function display() {
        $this->page .= file_get_contents("html/footer.html");
        echo $this->page;
    }
}