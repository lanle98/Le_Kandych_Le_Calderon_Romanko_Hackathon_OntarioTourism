<?php


require_once '../load.php';


date_default_timezone_set('EST');

$pdo = Database::getInstance()->getConnection();




    $fname = ucfirst($_POST["fname"]);
    $lname = ucfirst($_POST["lname"]);
    $email = trim($_POST["email"]);
    $country = $_POST["country"];
    $subscribe_date = date("Y/m/d h:i:s");
    $last_update_date = date("Y/m/d h:i:s");

    if (empty($fname) || empty($lname) || empty($email) || empty($country)) {
        $message = "error";
        echo json_encode($message, JSON_PRETTY_PRINT);
    }
    else{
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

        $user_data_query = "SELECT * FROM tbl_users WHERE email= '$email'";
        $get_data = $pdo->prepare($user_data_query);
        $get_data->execute();
        $fetch_user_data = $get_data->fetch(PDO::FETCH_ASSOC);

        echo json_encode($fetch_user_data, JSON_PRETTY_PRINT);

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

        $user_data_query = "SELECT * FROM tbl_users WHERE email= '$email'";
        $get_data = $pdo->prepare($user_data_query);
        $get_data->execute();
        $fetch_user_data = $get_data->fetch(PDO::FETCH_ASSOC);

        echo json_encode($fetch_user_data, JSON_PRETTY_PRINT);

        
    }
    }

    

