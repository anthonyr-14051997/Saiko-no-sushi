<?php

session_start();

$loginOK = false;
if(!$_SESSION['mdp']){
    header('Location: connection.php');
    exit;

} else {
    $loginOK = true;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <title>Back office : produits</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style> -->
</head>
    <title>Afficher les produits</title>
</head>
<body>
    <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(../images/imgacceuil.svg); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title">Saiko no sushi</h1>
              <div class="box-default-decor"></div>
              <h1>Acceuil du back office</h1>
            </div>
          </div>
        </div>
    </section>

    <section class="section section-lg section-inset-1">
        <h2><a href="../backoffice/produits.php">Afficher tout les produits</a></h2>
        <p>( N'oubliez pas de fermez le backoffice une fois l'utilisation terminé ! )</p>
        <h2><a href="logout.php">Fermer le backoffice</a></h2>
    </section>
        

    <style>
        body {
            display: flex;
            flex-direction: column;
        }
        a {
            margin-bottom: 5vh;
        }
    </style>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>

<!-- recupéré toutes les valeurs -->
<!--  
php 
$test = $bdd->query('SELECT * FROM ?')
while($valeurs = $test->()){
    php 
        div.stockage
        h1 = php $valeurs['colonnes']; php = h1
    php
}
-->
<!-- gerer les erreurs -->
<!--  
https://www.commentcamarche.net/faq/46512-pdo-gerer-les-erreurs
-->
<!-- lien de la vidéo -->
<!--  
https://www.youtube.com/watch?v=6ZSUTrvFSvM
(43.27min)
-->