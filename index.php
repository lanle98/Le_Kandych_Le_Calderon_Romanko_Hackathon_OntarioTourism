<?php
require_once 'load.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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


        <!-- Navbar brand -->
        <div class="jumbotron">


            <h1 class="display-3 title">Ontario Summer</h1>
            <h2 class="subtitle">Find yourself at home</h2>

            <div class="bottom-line d-flex justify-content-between">
                <div>
                    <img src="/images/Location.svg" alt="location" /> <span>Toronto</span>
                </div>

                <img src="images/scroll_icon.svg" alt="scroll" class="scroll" />

                <div class="social">

                    <a class="social" href="#"><object data="images/instagram.svg" type="image/svg+xml"></object></a>
                    <a class="social" href="#"><object data="images/facebook.svg" type="image/svg+xml"></object></a>
                    <a class="social" href="#"><object data="images/twitter.svg" type="image/svg+xml"></object></a>
                    <a class="social" href="#"><object data="images/youtube.svg" type="image/svg+xml"></object></a>


                </div>

            </div>
        </div>


        <div class="home">
            <p class="welcome-text text-left m-lg-5">
                Everything in Canada inevitably leads back to Ontario. The country’s most populated province by a wide margin, one in three Canadians dwell within its borders, along with practically everything powerful and important. Among other landmarks, Ontario houses Canada’s parliament, its largest city, the national stock exchange, the country’s biggest university, the headquarters of virtually every major Canadian newspaper, television station, corporation, and bank, and — just to top it off — Canada’s tallest building and biggest waterfall, too.
            </p>

            <h2 class="text-center travel"> TRAVEL IDEAS</h2>
            <div class="travel-ideas row  justify-content-center">

                <div class="left col-12 col-md-5 m-3">
                    <h3 class="m-0">
                        Looking for the perfect advanture?
                    </h3>
                    <img src="/images/city.jpg" alt="city" class="city m-2 img-fluid" />
                </div>









                <div class="right col-12 col-md-5 m-3">


                    <img src="/images/lakes.jpg" alt="cities" class="img-fluid" />
                    <p>
                        Ontario’s power comes at a price, however, and Canadians who live outside its borders will often regard it with a mixture of resentment and skepticism — surely they don’t deserve all that.
                    </p>


                </div>

            </div>

        </div>

        <div class="event-section">
            <h3 class="text-center">EVENTS</h3>
            <div class="events row m-auto justify-content-center">

                <div class="event col-12 col-md-3 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_1.jpg" alt="event">
                    <h4>Art Exhibition</h4>
                </div>

                <div class="event col-12 col-md-3 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_2.jpg" alt="event">
                    <h4>Running Races</h4>
                </div>

                <div class="event col-12 col-md-3 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_3.jpg" alt="event">
                    <h4>Music Festivals</h4>
                </div>

                <div class="event col-12 col-md-3 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_4.jpg" alt="event">
                    <h4>Street Food</h4>
                </div>

                <div class="event col-12 col-md-3 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_4.jpg" alt="event">
                    <h4>Street Food</h4>
                </div>

                <div class="event col-12 col-md-3 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_4.jpg" alt="event">
                    <h4>Street Food</h4>
                </div>
            </div>
        </div>


        <div class="WhereToEat container">
            <h2 class="text-center">Where To Eat</h2>

            <div class="food row">
                <div class="col-12 col-md-4 promo-text">
                    <h4 class="col-12 p-0">Best Food Ever</h4>
                    <p>Good nutrition is an important part of leading a healthy lifestyle.</p>
                </div>
                <img src="images/food/food_1.jpg" class="food-1 col-12 p-3 col-md-4" alt="food">
                <img src="images/food/food_2.jpg" class="food-2 col-12 p-3 col-md-4" alt="food">
                <img src="images/food/food_3.jpg" class="food-3 col-12 p-3 col-md-4" alt="food">
                <p class="col-12 col-md-4 good-nutrition">Good nutrition is an important part of leading a healthy lifestyle. Combined with physical activity, your diet can help you to reach and maintain a healthy weight, reduce your risk of chronic diseases </p>
            </div>

        </div>

        <div class="event-section">
            <h3 class="text-center">EVENTS</h3>
            <div class="events row m-auto justify-content-center">

                <div class="event col-12 col-md-5 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_1.jpg" alt="event">
                    <h4>Art Exhibition</h4>
                </div>

                <div class="event col-12 col-md-5 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_2.jpg" alt="event">
                    <h4>Running Races</h4>
                </div>

                <div class="event col-12 col-md-5 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_3.jpg" alt="event">
                    <h4>Music Festivals</h4>
                </div>

                <div class="event col-12 col-md-5 p-0 m-2">
                    <img class="img-fluid" src="images/events/event_4.jpg" alt="event">
                    <h4>Street Food</h4>
                </div>
            </div>
        </div>

        <div class="newsletter text-center m-5">
            <h3>SIGN UP FOR OUR NEWSLETTER</h3>
            <p>Stay connected with the latest stories and experiences from Ontario. By signing up for this newsletter, you are agreeing to the terms of the Privacy Policy.
            </p>
            <input class="submit my-3 col-md-4 py-3 mx-auto btn" name="submit" value="Sign Up" type="submit" />
        </div>







        <footer class="text-center p-5">
            <img class="logo" src="images/Logo.svg" alt="logo">

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
            <p>© 2020 Ontario Summer. All Rights Reserved.</p>
        </footer>







        <router-view></router-view>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="src/js/main.js" type="module"></script>
    <script src="src/animations.js" type="module"></script>
</body>

</html>