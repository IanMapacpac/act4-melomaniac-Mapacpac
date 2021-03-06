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
         h2.blue-text {color: lightblue;}

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

                        echo "<h2 class='blue-text'>AMAZING GRACE</h2>";
                        echo "<p class='lead'>John Newton</p>";

                        echo "<p>[REFRAIN]</p>";

                        echo "<pre class='tab4'>G    G7           C         G</pre>";
                        echo "<p>Amazing Grace! (how sweet the sound)</p>";
                        echo "<pre class='tab4'>                    D</pre>";
                        echo "<p> That saved a wretch like me!</p>";
                        echo "<pre class='tab4'> G        G7        C      G</pre>";
                        echo "<p>I once was lost, but now am found,</p>";
                        echo "<pre class='tab4'>   Em        D    G</pre>";
                        echo "<p>Was blind, but now I see.</p>";
                        echo "<br/>";

                        echo "<p>[VERSE 1]</p>";

                        echo "<pre class='tab4'>G    G7           C         G</pre>";
                        echo "<p>'Twas grace that taught my heart to fear,</p>";
                        echo "<pre class='tab4'>                    D</pre>";
                        echo "<p> And grace my fears relieved.</p>";
                        echo "<pre class='tab4'> G        G7        C      G</pre>";
                        echo "<p>How precious did that grace appear,</p>";
                        echo "<pre class='tab4'>   Em        D    G</pre>";
                        echo "<p>The hour I first believed.</p>";
                        echo "<br/>";

                        echo "<p>[VERSE 2]</p>";

                        echo "<pre class='tab4'>G    G7           C         G</pre>";
                        echo "<p>Through many dangers, toils and snares</p>";
                        echo "<pre class='tab4'>                    D</pre>";
                        echo "<p>We have already come</p>";
                        echo "<pre class='tab4'> G        G7        C      G</pre>";
                        echo "<p>'Twas grace hath brought us safe thus far</p>";
                        echo "<pre class='tab4'>   Em        D    G</pre>";
                        echo "<p>And grace will lead us home</p>";
                        echo "<br/>";

                        echo "<p>[VERSE 3]</p>";

                        echo "<pre class='tab4'>G    G7           C         G</pre>";
                        echo "<p>When we've been there ten thousand years,</p>";
                        echo "<pre class='tab4'>                    D</pre>";
                        echo "<p>Bright shining as the sun,</p>";
                        echo "<pre class='tab4'> G        G7        C      G</pre>";
                        echo "<p>We've no less days to sing God's praise</p>";
                        echo "<pre class='tab4'>   Em        D    G</pre>";
                        echo "<p>Than when we first begun.</p>";
                        echo "<br/>";

                        echo "<p>[REFRAIN]</p>";

                        echo "<pre class='tab4'>G    G7           C         G</pre>";
                        echo "<p>Amazing Grace! (how sweet the sound)</p>";
                        echo "<pre class='tab4'>                    D</pre>";
                        echo "<p> That saved a wretch like me!</p>";
                        echo "<pre class='tab4'> G        G7        C      G</pre>";
                        echo "<p>I once was lost, but now am found,</p>";
                        echo "<pre class='tab4'>   Em        D    G</pre>";
                        echo "<p>Was blind, but now I see.</p>";
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
