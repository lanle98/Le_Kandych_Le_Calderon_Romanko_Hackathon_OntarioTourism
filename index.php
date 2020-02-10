<?php

require_once 'load.php';

$pdo = Database::getInstance()->getConnection();
$query = "SELECT * FROM tbl_users WHERE id=1";

$results =  $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
echo $results['fname'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <!-- <link rel="stylesheet" href="src/css/main.css" /> -->
    <title>Document</title>
</head>

<body>
    <div id="app">

        <router-link to="/about">About</router-link>
        <router-link to="/">Home</router-link>
        <transition name="route-animation" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
            <router-view></router-view>
        </transition>
    </div>

    <script src="src/js/main.js" type="module"></script>
</body>

</html>