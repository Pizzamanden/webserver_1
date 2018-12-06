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
<div class="">
    <form class="" action="" method="post">
        <input type="email" name="email" value="">
        <input type="password" name="password" value="">
        <input type="text" name="username" value="">
        <button type="submit" name="button">
            Signup
        </button>
    </form>
</div>
<?php } ?>
