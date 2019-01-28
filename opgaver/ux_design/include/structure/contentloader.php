<?php
if(isset($_GET["page"])){
    $page = $_GET["page"];
} else {
    $page = "home";
}
$content = "content/";
switch ($page) {

    case "home":
        $content .= "frontpage.php";
        break;

    case "browse":
        $content .= "browse.php";
        break;

    case "search":
        $content .= "search.php";
        break;

    case "aboutus":
        $content .= "aboutus.php";
        break;

    case "contact":
        $content .= "contact.php";
        break;

    default:
        $content .= "frontpage.php";
        break;
}
require_once $content;
?>
