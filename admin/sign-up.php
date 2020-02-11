<?php


require_once '../load.php';


date_default_timezone_set('EST');
echo date("Y/m/d h:i:s");

$pdo = Database::getInstance()->getConnection();



if (isset($_POST["submit"])) {
    $fname = ucfirst($_POST["fname"]);
    $lname = ucfirst($_POST["lname"]);
    $email = trim($_POST["email"]);
    $country = $_POST["country"];
    $subscribe_date = date("Y/m/d h:i:s");
    $last_update_date = date("Y/m/d h:i:s");

    $match_query = "SELECT * FROM tbl_users WHERE email=:email";

    $match_check = $pdo->prepare($match_query);
    $match_check->execute(
        array(

            ':email' => $email
        )
    );

    $match_fetch = $match_check->fetch(PDO::FETCH_ASSOC);

    if ($email == $match_fetch["email"]) {
        $update_query = "UPDATE tbl_users SET last_update_date = :last_update_date WHERE email =:email";

        $last_update = $pdo->prepare($update_query);
        $last_update->execute(
            array(
                ':email' => $email,
                ':last_update_date' => $last_update_date

            )
        );


        echo "Welcome back $fname";
    } else {
        $register_query = "INSERT INTO tbl_users (fname,lname,email,country,subscribe_date,last_update_date) VALUES(:fname,:lname,:email,:country,:subscribe_date,:last_update_date);";

        $register = $pdo->prepare($register_query);
        $register->execute(
            array(
                ':fname' => $fname,
                ':lname' => $lname,
                ':email' => $email,
                ':country' => $country,
                ':subscribe_date' => $subscribe_date,
                ':last_update_date' => $last_update_date
            )
        );

        echo "Thank you " . $fname;
    }
}
