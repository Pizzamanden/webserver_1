<?php
    // Array for creating LI's for navigation
    $headerVar =[
    "home" => "?page=home",
    "content" => "?page=content",
    "about us" => "?page=aboutus"
    ];
?>


<header>
    <div class="header_wrap">
        <div class="header_hero" id="headerHero">
            <div class="header_logo">
                <img src="img/index.png" alt="Art Palette logo">
            </div>
        </div>
        <div class="header_nav flex">
            <nav class="header_navbar">
                <ul class="flex">
                    <?php
                    //Echo LI's from array at file start
                        foreach($headerVar as $key => $value){
                            echo "<li><a href='$value'>" . $key . "</a></li>";
                        }
                    ?>
                </ul>
            </nav>
            <div class="header_login">
                <?php
                // Check for active user and display the right buttons
                    if($loggedIn === true){
                ?>
                <div class="header_viewProfile">
                    <a href="?page=viewProfile">
                        This You
                    </a>
                </div>
                <div class="header_logoutDIV">
                    <a href="?page=logout">
                        Logout
                    </a>
                </div>
                <?php
                    } else {
                ?>
                <div class="header_loginDIV">
                    <a href="?page=login">
                        Login
                    </a>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</header>
