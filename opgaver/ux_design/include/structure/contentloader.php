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
?>
<main class="content_main">
    <div class="content_wrap flex sb">
        <div class="content_mainblock">
        <?php
            require_once $content;
        ?>
        </div>
        <div class="content_sidebar">
        <?php
            require_once "sidebar.php";
        ?>
        </div>
    </div>
</main>
