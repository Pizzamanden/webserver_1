<header class="header_main">
    <div class="header_wrap flex sb">
        <div class="header_logo">
            <img src="img/Katching.png" alt="Logo of a cat">
        </div>
        <div class="header_search">
            <form action="" method="GET" class="flex">
                    <input type="hidden" name="page" value="search">
                    <?php
                        $inputHTML = "<input type='text' name='q' placeholder='Search here!'";
                        if(isset($_GET["q"])){
                            $inputHTML .= " value='" . $_GET["q"] . "'>";
                        } else {
                            $inputHTML .= ">";
                        }
                        echo $inputHTML;
                    ?>
                    <button type="submit">
                        Search!
                    </button>
            </form>
        </div>
        <nav class="header_nav">
                <ul class="flex sb">
                    <li>
                        <a href="?page=home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="?page=browse">
                            Browse
                        </a>
                    </li>
                    <li>
                        <a href="?page=aboutus">
                            About us
                        </a>
                    </li>
                    <li>
                        <a href="?page=contact">
                            Contact
                        </a>
                    </li>
                </ul>
        </nav>
    </div>
</header>
