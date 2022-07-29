<?php
    require("header.html");
    require("menu.html");
    

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        switch($page){
            case "home" : 
                require("home.html");
                break;
            case "presentation":
                require("presentation.html");
                break;
            case "contact":
                require("contact.html");
                break;
        }
    }

    require("footer.html");