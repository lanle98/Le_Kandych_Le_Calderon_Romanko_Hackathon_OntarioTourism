<?php
require_once 'load.php';
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

        <!-- <router-link to="/about">About</router-link>
        <router-link to="/">Home</router-link> -->
        <!-- <transition name="route-animation" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight"> -->

        <div class="jumbotron">

            <div class="header">
                <!-- Navbar brand -->
                <nav>
                    <a class="navbar-brand" href="/"><img src="images/Logo.svg" alt="logo" /></a>

                    <!-- Collapse button -->
                    <div class="navbar-toggler first-button mr-auto align-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20" aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="animated-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse " id="navbarSupportedContent20">

                        <!-- Links -->
                        <ul class="navbar-nav  mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Travel Ideas <span class="sr-only">(current)</span></a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#">Where to go</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Where to eat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Events</a>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link" to="/register">Sign up</router-link>
                            </li>
                        </ul>
                        <!-- Links -->

                    </div>


                </nav>


            </div>

        </div>


        <router-view></router-view>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="src/js/main.js" type="module"></script>
    <script src="src/animations.js" type="module"></script>
</body>

</html>