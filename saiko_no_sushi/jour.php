<?php
include 'produits.php';
include 'addSite.php.php';
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="fr"> 
  <head>
    <title>Offre du jour</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>.ie-panel{display: none; background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); 
      clear: both; text-align:center; position: relative; z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" 
      alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" 
            data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" 
            data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" 
            data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" 
            data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel"> 
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="index.php"><img src="./images/logo.svg" alt="" style="width: 5vh;"></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="jour.php">Offre du jour</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="parallax-container overlay-1">
        <div class="parallax-content breadcrumbs-custom context-dark" style="background-image: url(./images/imgacceuil.svg); background-size: cover;"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Offre du jour</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Base typography -->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse justify-content-xl-between">
            <div class="col-xl-4">
              <div class="block-bordered-left">
                <div class="row row-40">
                  <div class="col-sm-6 col-xl-12">
                    <h5 class="thin-title">Juste pour vous</h5>
                    <h2 class="heading-font text-accent-3">Enfants</h2>
                    <h3 class="heading-font font-family-base">Familles</h3>
                    <h2 class="heading-font text-accent-2">Couples</h2>
                  </div>
                  <div class="col-sm-6 col-xl-12">
                    <h5 class="thin-title">- 10€ sur la commande</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-7">
              <ul class="list-xxl heading-list">
                <?php
                  $bdd = new PDO('mysql:host=localhost;dbname=mydb', 'phpmyadmin', 'azz0Lan12');
                  $recupApero = $bdd->query('SELECT nom_aperitif, prix_aperitif, img_aperitif FROM aperitif WHERE id_aperitif = 1');
                  $recupPlat = $bdd->query('SELECT nom_produit, prix, img_produit FROM plat WHERE id_plat = 15');
                  $recupDessert = $bdd->query('SELECT nom_dessert, prix_dessert, img_dessert FROM desserts WHERE id_dessert = 5');
                  $recupBoisson = $bdd->query('SELECT nom_boisson, prix_boisson, img_boisson FROM boisson WHERE id_boisson = 4');

                  $valuesApero = $recupApero->fetch();
                  $valuesPlat = $recupPlat->fetch();
                  $valuesDessert = $recupDessert->fetch();
                  $valuesBoisson = $recupBoisson->fetch();
                ?>
                <li>
                  <h2> <?= $valuesApero['nom_aperitif']; ?> </h2>
                  <h3>prix : <?= $valuesApero['prix_aperitif']; ?>€</h3>
                  <img src="<?= $valuesApero['img_aperitif']; ?>" alt="">
                  <p>descri</p>
                </li>
                <li>
                  <h2> <?= $valuesPlat['nom_produit']; ?> </h2>
                  <h3>prix : <?= $valuesPlat['prix']; ?>€</h3>
                  <img src="<?= $valuesPlat['img_produit']; ?>" alt="">
                  <p>descri</p>
                </li>
                <li>
                  <h2> <?= $valuesDessert['nom_dessert']; ?> </h2>
                  <h3>prix : <?= $valuesDessert['prix_dessert']; ?>€</h3>
                  <img src="<?= $valuesDessert['img_dessert']; ?>" alt="">
                  <p>descri</p>
                </li>
                <li>
                  <h2> <?= $valuesBoisson['nom_boisson']; ?> </h2>
                  <h3>prix : <?= $valuesBoisson['prix_boisson']; ?>€</h3>
                  <img src="<?= $valuesBoisson['img_boisson']; ?>" alt="">
                  <p>descri</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
       <!--Google Map-->
       <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:43},{&quot;lightness&quot;:-11},{&quot;hue&quot;:&quot;#0088ff&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ff0000&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:99}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#808080&quot;},{&quot;lightness&quot;:54}]},{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ece2d9&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ccdca1&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#767676&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#b8cb93&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]}]">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
          </ul>
        </div>
      </section>
      <!--Section: Contact v.2-->
      <section class="mb-4 ml-5">
      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Contacter nous</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">
          Une question ? Besoin d'argent ? Besoin de parler après un divorce ? Contacter-nous ! Tout nos conseiller sont occuper donc 
          ont ne vous réponderas pas mais sa fait du bien de vider son sac ;)
      </p>

      <div class="row">

          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="../saiko_no_sushi/mail/mail.php" method="POST">

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="name" name="name" class="form-control">
                              <label for="name" class="">Nom, prénom, sexe, taille des chaussures</label>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="email" name="email" class="form-control">
                              <label for="email" class="">Votre mail et coordonnées bancaires</label>
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="">Le sujet innintérréssant de votre message</label>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <div class="md-form">
                              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                              <label for="message">Ici ... écrivez ce que vous voulez, personne ne vous liras</label>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->

              </form>

              <div class="text-center text-md-left">
                  <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit(); validateForm();">Envoie</a>
              </div>
              <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>San Francisco, global deejays</p>
                  </li>

                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>555-42-555</p>
                  </li>

                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>grandbientefasse@rafdetalife.frcom</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->

      </div>

      </section>
      <!--Section: Contact v.2-->
      
      <!-- Page Footer-->
      <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.php"><img src="./images/logo.svg" alt=""></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li><a href="#">Menu</a></li>
                  <li><a href="jour.php">Offre du jour</a></li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li>
                </ul>
              </div>
            </div>
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span>
              <span>Anthony RUBY</span><span>.&nbsp;</span><span>Les meilleurs des sushi.</span><span>&nbsp;</span>
              <a href="#">Mention légales</a>. Design&nbsp;by&nbsp;<a href="index.php">L'empereur Busishakado. </a><a href="https://www.templatemonster.com/website-templates/monstroid2.html">Template par : templatemonster</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="./js/core.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>