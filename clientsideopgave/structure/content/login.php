<?php
    if(isset($_POST["email"]) && isset($_POST["password"])){
        $email = $_POST["email"];
        $pass = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email = '" . $email . "'";
        $result = $conn->query($sql);
        if($result->num_rows < 1){
            // Error: No match for email
            echo "No such email! (Burde være den eneste error og hede 'Oops! Email or password was wrong, try again!')";
        } elseif($result->num_rows > 1) {
            // what?
            echo "Øhh, den her error burde slet ikke poppe op, da det betyder der er mere end 1 email match, og det col er unique...?";
        } else {
            while ($row = $result->fetch_assoc()) {
                if (password_verify($pass, $row["password"])) {
                    // Success!
                    echo "Hello, " . $row["username"];
                }
                else {
                    // Error: Password wrong
                    echo "Password wrong! (Det her burde jo ikke være en error)";
                }
            }
        }
    } else {
?>
<div class="">
    <form class="" action="" method="post">
        <input type="email" name="email" value="">
        <input type="password" name="password" value="">
        <button type="submit" name="button">
            Signup
        </button>
    </form>
</div>
<?php } ?>
