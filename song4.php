<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melomaniac Activity</title>
        <link rel="icon" type="image/x-icon" href="assets/images.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
        <style>
        .tab1 {
            tab-size: 2;}
        .tab2 {
            tab-size: 4;}
        .tab4 {
            tab-size: 8;}
        .img { border-radius: 50%;  }
         h2.red-text {color: lightblue;}

         .line:hover{
      text-decoration:underline; 
      text-decoration-thickness: 2px;       
     }

     .glow:hover{
        background: rgb(100, 100, 100);
        padding: 5px 5px;
        transition: all 0.2s ease-in-out;
     }
    </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-0">
                 <a href="index.php" title="Home Page"><img class='img glow' src="assets\logo.jpg" height=50px width=50px></a>
                <a class="navbar-brand" href="#page-top"><h2><b> &ensp; Symphony of Grace</b></h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light line" href="song1.php">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light line" href="song2.php">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light line" href="song3.php">Song 3</a></li>
                        <li class="nav-item"><a class="nav-link text-light line" href="song4.php">Song 4</a></li>
                        <li class="nav-item"><a class="nav-link text-light line" href="song5.php">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-0 text-center">
                <h1 class="fw-bolder">Welcome to Symphony of Grace</h1>
                <p class="lead">Nothing beats more than the Spirit of Symphony running through your veins</p>
                
            </div>
        </header>
        <!-- About section-->
        <section class="bg-dark bg-gradient text-white id='songs'">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                       
                        <?php

                        echo "<h2 class='red-text'>ALL HAIL THE POWER OF JESUS' NAME</h2>";
                        echo "<p class='lead'>Tommy Walker</p>";

                        echo "<p>[REFRAIN]</p>";

                        echo "<p>G D Em D</p>";
                        echo "<p>All hail the pow'r of Je- sus' name!</p>";
                        echo "<p>Crown Him, ye martyrs of your God,</p>";
                        echo "<p>Ye seed of Israel's chos- en race,</p>";
                        echo "<p>Sinners, whose love can ne'er for- get</p>";
                        echo "<p>Let ev’ry kindred, ev’- ry tribe,</p>";
                        echo "<p>O that with yonder sa- cred throng</p>";
                        echo "<br/>";

                        echo "<p>G D G G D G</p>";
                        echo "<p>Let an- gels pros-trate fall;</p>";
                        echo "<p>Who from His al- tar call</p>";
                        echo "<p>Ye ran- somed from the fall,</p>";
                        echo "<p>The worm-wood and the gall,</p>";
                        echo "<p>On this ter- res- trial ball,</p>";
                        echo "<p>We at His feet may fall;</p>";
                        echo "<br/>";

                        echo "<p>D G D G</p>";
                        echo "<p>Bring forth the royal diadem,</p>";
                        echo "<p>Ex- tol the Stem of Jesse’s rod,</p>";
                        echo "<p>Hail Him who saves you by his grace,</p>";
                        echo "<p>Go, spread your trophies at His feet,</p>";
                        echo "<p>To Him all majesty ascribe,</p>";
                        echo "<p>We’ll join the everlasting song,</p>";
                        echo "<br/>";

                        echo "<p>D G D Em D A D</p>";
                        echo "<p>And crown Him Lord of all.</p>";
                        echo "<br/>";

                        echo "<p>G D Em G C G D G</p>";
                        echo "<p>Bring forth the royal diadem, and crown Him Lord of all.</p>";
                        echo "<p>Extol the Stem of Jesse’s rod,</p>";
                        echo "<p>Hail Him who saves you by His grace,</p>";
                        echo "<p>Go, spread your trophies at His feet,</p>";
                        echo "<p>To Him all majes- ty ascribe,</p>";
                        echo "<p>We’ll join the ever- lasting song,</p>";
                        echo "<br/>";



                        echo "<br/>";
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-info">
            <div class="container px-4"><p class="m-0 text-center text-black">Copyright &copy; 2022. 
                <a href="https://web.facebook.com/ian.mapacpac" target="_blank">Ian Mapacpac</a></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
