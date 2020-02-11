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

        <!-- <router-link to="/about">About</router-link>
        <router-link to="/">Home</router-link> -->
        <!-- <transition name="route-animation" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight"> -->

        <div class="jumbotron">

          <div class="header">
            <!-- Navbar brand -->
            <nav>
    <a class="navbar-brand ml-4" href="#"><img src="images/Logo.svg" alt="logo"/></a>
  
  <!-- Collapse button -->
  <button class="navbar-toggler first-button float-right align-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
    aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
    <div class="animated-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse " id="navbarSupportedContent20">

    <!-- Links -->
    <ul class="navbar-nav  ml-auto">
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
          <a class="nav-link" href="#">Sign up</a>
        </li>
    </ul>
    <!-- Links -->

  </div>


</nav>


          </div>
           <h1 class="title display-2">Ontario Summer</h1>
           <h2 class="subtitle">Find yourself at home</h2>

           <div class="bottom-line d-flex justify-content-between align-items-center ">
               <div>
               <img src="/images/Location.svg" alt="location" class="align-bottom"/>
               <span class="align-bottom">Toronto</span>

               </div>
            
            <img src="/images/scroll_icon.svg" alt="scroll" class="align-text-bottom scroll"/>
            <div class="social align-bottom">
            <a  href="#"><object data="/images/instagram.svg" type="image/svg+xml" class="img-fluid"></object></a>
            <a  href="#"><object data="/images/facebook.svg" type="image/svg+xml" class="img-fluid"></object></a>
            <a  href="#"><object data="/images/twitter.svg" type="image/svg+xml" class="img-fluid"></object></a>
            <a  href="#"><object data="/images/youtube.svg" type="image/svg+xml" class="img-fluid"></object></a>
            
            </div>

        </div>

        

        </div>
          
        <p class="welcome-text text-left m-lg-5">
        Everything in Canada inevitably leads back to Ontario. The country’s most populated province by a wide margin, one in three Canadians dwell within its borders, along with practically everything powerful and important. Among other landmarks, Ontario houses Canada’s parliament, its largest city, the national stock exchange, the country’s biggest university, the headquarters of virtually every major Canadian newspaper, television station, corporation, and bank, and — just to top it off — Canada’s tallest building and biggest waterfall, too.
        </p>
        <div class="travel-ideas d-flex flex-column">
            <h2 class="text-center"> TRAVEL IDEAS</h2>
            <div>
                <h2>
                    Looking for the perfect advanture?
                </h2>
                   <div class="yellow-div "></div>
                   <img src="/images/cities.jpg" alt="cities" class=" image-fluid"/>

            </div>

            <div>
                
                   <div class="yellow-div "> </div>
                   <img src="/images/lakes.jpg" alt="cities" class=" image-fluid"/>
                   <p>
                   Ontario’s power comes at a price, however, and Canadians who live outside its borders will often regard it with a mixture of resentment and skepticism — surely they don’t deserve all that.
               </p>

            </div>
            <div class="where-to-go">
            <h2 class="text-center"> WHERE TO GO</h2>

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