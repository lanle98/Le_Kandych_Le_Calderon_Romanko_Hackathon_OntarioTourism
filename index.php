<?php

require_once 'load.php';

// $pdo = Database::getInstance()->getConnection();
// $query = "SELECT * FROM tbl_users WHERE id=1";

// $results =  $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
// echo $results['fname'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="#" />
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css" />
    <title>Ontario Summer</title>
</head>

<body>
    <div id="app">

        <router-link to="/about">About</router-link>
        <router-link to="/">Home</router-link>
        <transition name="route-animation" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
            <router-view></router-view>
        </transition>
    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<script src="src/js/main.js" type="module"></script>
</body>

</html>