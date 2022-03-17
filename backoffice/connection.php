<?php
session_start();

$loginOK = false;
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut) {
            $loginOK = true;
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: indexBackoffice.php');
            exit;
        } else {
            header('Location: logout.php');
            exit;
        }
    } else {
        echo "veuiller completer tous les champs...";
    }
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
    <title>Afficher les produits</title>
</head>
<body>
    <div class="bg-gray-1">
        <h2>Connectez-vous pour acceder au back office</h2>
        <div class="section section-lg section-inset-1">
            <div class="col-lg-6 col-xl-5 wow fadeInRight" >
                <form method="POST" align="center">
                    <input type="text" name="pseudo" autocomplete="off">
                    <input type="password" name="mdp">
                    <input type="submit" name="valider">
                </form>
            </div>
        </div>
    </div>
    
    
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>