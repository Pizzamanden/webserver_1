<?php
    require $_SERVER["DOCUMENT_ROOT"] . "/include/code/config.php";
    define("THIS_TABLE", "client_side");
    define("PROJECT_START", ROOT . "clientsideopgave/");


    $loggedIn = false;
?>
<!DOCTYPE html>
<html>
    <?php
        require_once "structure/HTMLhead.php";
    ?>
    <body class="setFont">
        <?php
            require_once "structure/header.php";

            require_once "structure/content.php";

            require_once "structure/footer.php";
        ?>
        <script src="js/jQueryLIB.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
