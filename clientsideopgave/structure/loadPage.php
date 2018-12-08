<?php
    $getPageGET;
    if(isset($_GET["page"])){
        $getPageGET = $_GET["page"];
    } else {
        $getPageGET = "home";
    }

    function loadPage($pageAsString, $prePend){
        return $prePend . $pageAsString . ".php";
    }

    switch ($getPageGET) {
        case "home":
            require_once loadPage("home", "structure/content/");
            break;
        case "aboutus":
            require_once loadPage("aboutus", "structure/content/");
            break;
        case "gallery":
            require_once loadPage("gallery", "structure/content/");
            break;
        case "signup":
            require_once loadPage("signup", "structure/content/");
            break;
        case "login":
            require_once loadPage("login", "structure/content/");
            break;
        case "profile":
            require_once loadPage("profile", "structure/content/");
            break;
        default:
            require_once loadPage("404", "structure/content/");
    }
