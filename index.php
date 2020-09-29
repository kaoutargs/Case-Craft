<?php include('header.php');?>

  <header class="container-fluid">
    <div class="row">
    <div class="banner img-fluid">


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navopacity fixed-top">
  <div class="container">
    <a class="navbar-brand text-dark" href="#">
    <img  src="img/logo.png"  class="d-inline-block align-top" alt="logo" loading="lazy">
    <h4>Casecraft</h4>
  </a>

        <div class="d-flex justify-content-around">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
                          aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
        <a class="px-4 nav item nav-link active font-italic" href="#tutorials">Tutorials</a>
        <a class="px-4 nav item nav-link active font-italic"  href="#download">Download</a>
        <a class="px-4 nav item nav-link active font-italic" href="#features">Features</a>
        <a class="px-4 nav item nav-link active font-italic" href="#faqs">FAQs</a>
      </div>
    </div>
  </div>
</div>
</nav>
<!-- Fin Navbar -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="landing col-lg-4 col-sm-4">

  <h1 id="text3">Design</h1>
  <h1 id="text3">cases for your gadgets</h1>

<h1 id="text1">Design</h1>
<h1 id="text2">cases for your gadgets</h1>
<div class="btn-download">
  <button type="button" class="btn-hover color-3 font-italic">Download app</button>
</div>
</div>
<div class="phone">
  <img src="img/phone.png" alt="">

</div>
</header>


<div id="tutorials">

  <h2 class="text-center font-italic">We're CaseCraft</h2>
<br>
<p class="text-center font-italic col-lg-5">We bring your imaginations to life by giving you the power & ability to create amazing, outstanding, breathtaking & spectacular cases for your gadgets</p>
<div class="d-flex justify-content-center">
  <button type="button" class="btn-howitworks btn-hover color-3 font-italic"> <img class="howitworks" src="img/play.png" alt="icone_play">How it works</button>

</div>

<div class="screen2 img-fluid">

</div>
</div>

<div class="superhero font-italic">
<p class="atool">A tool that makes you</p>
<h1>A Superhero</h1>
<p class="descrip col-lg-5">Stand upright, wear your cape and put on some tight superman pants.</p>
</div>
<div class="container-fluid">

<img id="screen3" src="img/app_screens3.png" alt="icone_play">
</div>

<div class="photos font-italic">
<p class="getfull">Get full access to</p>
<h1>Photos & Patterns</h1>
<p class="descrip col-lg-5">Explore photos, patterns, colors & gradients designed by the best designers or simply use yours</p>
</div>

<img id="screen4" src="img/app_screens4.png" alt="icone_play">

<div class="container">
  <div class="row">



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
  $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

$query = "SELECT * FROM `product` WHERE id=:id";
$req= $db->prepare($query);
$array= [
  ':id'=>15
];
$req->execute($array);
$result= $req->fetch();

 ?>

 <div class="product font-italic">
 <h1><?=$result['title'] ?></h1>
 </div>

 <div class="product col-lg-4 col-sm-5 font-italic">
 <p class="descrip-mob"><?=$result['description'] ?></p>

 <button type="button" class="btn-seemore btn-product btn-hover color-3 font-italic">See more products</button>
 </div>

<img class='product-image d-block w-80' src='<?=$result['image'] ?>' alt='First slide'>
<?php


 ?>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="phone_pruple_mob">

</div>
  <img id="phone_purple" src="img/phone_purple.png" alt="icone_play">
<br>
<br>
<br>

<div id="download" class="d-flex justify-content-center">
<h1 class="get-started font-italic col-lg-8 text-center">Get started now</h1>
</div>
<div class="btn-apple">
  <button type="button" class="btn-hover2 color-3"> <img class="apple" src="img/logo_apple.png" alt="logo_apple"><p>Download on the App Store</p></button>
</div>
<div class="btn-playstore">
  <button type="button" class="btn-hover2 color-3"> <img class="play" src="img/logo_playstore.png" alt="logo_playstore"><p>Get it on Play Store</p></button>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="screen5">
  <img src="img/app_screens5.png" alt="">

</div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<?php include('footer.php');?>
