<?php
    if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["username"])){
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["password"]);
        $user = mysqli_real_escape_string($conn, $_POST["username"]);

        // Kør server-side validation på de indtastede felter

        $hash = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users ("
            . "email, "
            . "password, "
            . "username) "
            . "VALUES ("
            . "'$email', "
            . "'$hash', "
            . "'$user')";
        if($conn->query($sql)){
            echo "Signed up! Now login to test ;)";
            // Lav redirect til profil (eller login?)
        } else {
            // Smid en error, om email eller username allerede er taget, eller ugyldighed
            echo "Username or Email already in use: ";
            echo "Email: " . $email . ", Username: " . $user;
        }
    } else {
?>
<div class="signup_wrap">
    <form class="signup_form" action="" method="post">
        <div class="">
            <label for="email">
                Email:
            </label><br>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="">
            <label for="password">
                Password: (Not checking repeat)
            </label><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="password" name="passwordR" placeholder="Password repeated (not used)">
        </div>
        <div class="">
            <label for="username">
                Username:
            </label><br>
            <input type="text" name="username" placeholder="Username">
        </div>
        <button type="submit" name="button">
            Signup
        </button>
    </form>
</div>
<?php } ?>
