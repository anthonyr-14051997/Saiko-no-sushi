<?php
session_start();

$loginOK = false;
if(!$_SESSION['mdp']){
    header('Location: connection.php');
    exit;

} else {
    $loginOK = true;
}

include 'bdd.php';

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    
    $getid = $_GET['id'];
    $recupProd = $bdd->prepare('SELECT * FROM produits WHERE id = ? ');
    $recupProd->execute(array($getid));

    

    if($recupProd->rowCount() > 0){

        $alldata = $recupProd->fetch();
        $oldname = $alldata['nom'];
        $oldprix = $alldata['prix_produit'];
        $oldpicture = $alldata['img'];

        if(isset($_POST['modife'])) {
            $nameprod = htmlspecialchars($_POST['newprod']);
            $prixprod = htmlspecialchars($_POST['prodnumb']);
            $imgprod = htmlspecialchars($_POST['imgprod']);

            $updateprod = $bdd->prepare('UPDATE produits SET nom = ?, prix_produit = ?, img = ?, description_produit = ?, id_categorie = ? WHERE id = ?');
            $updateprod->execute(array($nameprod, $prixprod, $imgprod, $getid));

            header('Location: produits.php');
            exit;
        }

    } else {
        ?> <style> .platmodife {display: none;} </style> <?php
    }
} else {
    ?> <style> .platmodife {display: none;} </style> <?php
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back office : Modifier</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
    <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(../images/imgacceuil.svg); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title">Saiko no sushi</h1>
              <div class="box-default-decor"></div>
              <h1>Page des modifications</h1>
            </div>
          </div>
        </div>
    </section>

    <h1></h1>
    <main class="bg-gray-1">
        <section class="section section-lg section-inset-1 d-flex justify-content-center">
            <div class="platmodife">
                <h2>Modifier le plat</h2>

                <form method="POST">

                    <p>Ancien nom : <?= $oldname; ?></p>

                    <input type="text" name="newprod" placeholder="nom du produit">

                    <p>Ancien prix : <?= $oldprix; ?></p>

                    <input type="number" name="prodnumb" placeholder="prix du produit" step="0.01">

                    <p>Ancienne img : <img src="<?= $oldpicture; ?>" alt=""></p>

                    <p><?= $oldpicture; ?></p>

                    <input type="url" name="imgprod" placeholder="url de l'image">

                    <input type="submit" name="modife">

                </form>
                <br>
                <a href="../backoffice/produits.php">Retour aux produits</a>
            </div>
        </section>
    </main>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
