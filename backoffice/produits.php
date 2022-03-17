<?php
session_start();

if(!$_SESSION['mdp']){
    header('Location: connection.php');
    exit;

} else {
    $loginOK = true;
}

include 'bdd.php';
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
              <h1>Affichages des produits</h1>
            </div>
          </div>
        </div>
    </section>

    <h2><a href="indexBackoffice.php" class="mx-5">Fermez le backoffice</a></h2>
    

    <!-- -------------------------------------------- nouveau design ---------------------------------------------------------------------------------------------------------------------------- -->

    <form method="POST" action="add.php" class="mx-5 mt-5 mb-5">
        <p class="h3 bg-green">Ajoutez un produits</p>
        <ul class="d-flex">Libellé : 
            <li class="ml-2">Apéritif : 1</li>
            <li class="ml-2">Plât : 2</li>
            <li class="ml-2">Désserts : 3</li>
            <li class="ml-2">Boissons : 4</li>
        </ul>
        <input type="url" name="categ" placeholder="Libellé">
        <input type="text" name="nom" placeholder="nom du produit">
        <input type="number" name="prix" step="0.01" placeholder="prix du produit">
        <input type="url" name="img" placeholder="url de l'image">
        <input type="text" name="descri" placeholder="Description">
        <input type="submit" name="valider">
    </form>

    <section class="section section-lg bg-gray-1">
        <div class="container">
          <h2 class="text-center">Notre carte</h2>
          <div class="row">
            <div class="col-12">
              <div class="tabs-custom tabs-horizontal tabs-classic" id="tabs-1">
                <ul class="nav nav-tabs nav-tabs-classic">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Apéritifs</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Plâts</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Désserts</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab">Boissons</a></li>
                </ul>
                <!-- debut des produits -->

                <div class="tab-content">
                    <!-- aperitifs -->
                    <div class="tab-pane fade show active" id="tabs-1-1">
                    <?php
                        /* aperitif */
                   
                    $recupProd = $bdd->query('SELECT * FROM produits WHERE id_categorie = 1');
                    $recupProdeux = $bdd->query('SELECT * FROM catégories WHERE id = 1');
                    $valeursdeux = $recupProdeux->fetch();
                    
                    while ($valeurs = $recupProd->fetch())
                    {

                    ?>
                    
                        <div class="box-event-modern">
                            <div class="event-item-modern  overflow-auto">
                                <h4 style="margin: 1vh;"><?= $valeurs['id']; ?> : id du produit</h4>
                                <h4 style="margin: 1vh;"><?= $valeursdeux['libelle']; ?></h4>
                                <h4 class="event-item-modern-title"><?= $valeurs['nom']; ?></h4>
                                <p class="event-time"> prix : <?= $valeurs['prix_produit']; ?> € </p>
                                <img src="<?= $valeurs['img']; ?>" alt="">
                                <p class="event-time" style="overflow: auto;"><?= $valeurs['img']; ?></p>
                                <div class="event-item-modern-text">
                                    <p>Description : <?= $valeurs['description_produit'] ?></p>
                                    <a href="supp.php?id=<?=$valeurs['id']; ?>" style="background: red; color: white;">Supprimer de la table</a>
                                    <a href="modifie.php?id=<?=$valeurs['id']; ?>" style="background: blue; color: white;">Modifier dans la table</a>
                                    <a href="modifiecarou.php?id=<?=$valeurs['id']; ?>" style="background: violet; color: white;">Ajoutez l'image au carousel</a>
                                </div>
                            </div>
                        </div>
                    
                    
                    <?php
                    }
                    ?>
                    </div>
                    <!-- plat -->
                    <div class="tab-pane fade" id="tabs-1-2">
                    <?php
                    /* plat */
                    
                    $recupProd = $bdd->query('SELECT * FROM produits WHERE id_categorie = 2');
                    $recupProdeux = $bdd->query('SELECT * FROM catégories WHERE id = 2');
                    $valeursdeux = $recupProdeux->fetch();
                    
                    while ($valeurs = $recupProd->fetch())
                    {

                    ?>
                    
                        <div class="box-event-modern">
                            <div class="event-item-modern  overflow-auto">
                                <h4 style="margin: 1vh;"><?= $valeurs['id']; ?> : id du produit</h4>
                                <h4 style="margin: 1vh;"><?= $valeursdeux['libelle']; ?></h4>
                                <h4 class="event-item-modern-title"><?= $valeurs['nom']; ?></h4>
                                <p class="event-time"> prix : <?= $valeurs['prix_produit']; ?> € </p>
                                <img src="<?= $valeurs['img']; ?>" alt="">
                                <p class="event-time" style="overflow: auto;"><?= $valeurs['img']; ?></p>
                                <div class="event-item-modern-text">
                                    <p>Description : <?= $valeurs['description_produit'] ?></p>
                                    <a href="supp.php?id=<?=$valeurs['id']; ?>" style="background: red; color: white;">Supprimer de la table</a>
                                    <a href="modifie.php?id=<?=$valeurs['id']; ?>" style="background: blue; color: white;">Modifier dans la table</a>
                                    <a href="modifiecarou.php?id=<?=$valeurs['id']; ?>" style="background: violet; color: white;">Ajoutez l'image au carousel</a>
                                </div>
                            </div>
                        </div>
                    
                
                    <?php
                    }
                    ?>
                    </div>
                    <!-- dessert -->
                    <div class="tab-pane fade" id="tabs-1-3">
                    <?php
                        /* dessert */
                    
                    $recupProd = $bdd->query('SELECT * FROM produits WHERE id_categorie = 3');
                    $recupProdeux = $bdd->query('SELECT * FROM catégories WHERE id = 3');
                    $valeursdeux = $recupProdeux->fetch();
                    
                    while ($valeurs = $recupProd->fetch())
                    {

                    ?>
                        
                            <div class="box-event-modern">
                                <div class="event-item-modern  overflow-auto">
                                    <h4 style="margin: 1vh;"><?= $valeurs['id']; ?> : id du produit</h4>
                                    <h4 style="margin: 1vh;"><?= $valeursdeux['libelle']; ?></h4>
                                    <h4 class="event-item-modern-title"><?= $valeurs['nom']; ?></h4>
                                    <p class="event-time"> prix : <?= $valeurs['prix_produit']; ?> € </p>
                                    <img src="<?= $valeurs['img']; ?>" alt="">
                                    <p class="event-time" style="overflow: auto;"><?= $valeurs['img']; ?></p>
                                    <div class="event-item-modern-text">
                                        <p>Description : <?= $valeurs['description_produit'] ?></p>
                                        <p><a href="supp.php?id=<?=$valeurs['id']; ?>" style="background: red; color: white;">Supprimer de la table</a></p>
                                        <p><a href="modifie.php?id=<?=$valeurs['id']; ?>" style="background: blue; color: white;">Modifier dans la table</a></p>
                                        <a href="modifiecarou.php?id=<?=$valeurs['id']; ?>" style="background: violet; color: white;">Ajoutez l'image au carousel</a>
                                    </div>
                                </div>
                            </div>
                        
                  
                    <?php
                    }
                    ?>
                    </div>
                    <!-- boisson -->
                    <div class="tab-pane fade" id="tabs-1-4">
                    <?php
                        /* boisson */      
                    
                    $recupProd = $bdd->query('SELECT * FROM produits WHERE id_categorie = 4');
                    $recupProdeux = $bdd->query('SELECT * FROM catégories WHERE id = 4');
                    $valeursdeux = $recupProdeux->fetch();
                    
                    while ($valeurs = $recupProd->fetch())
                    {

                    ?>
                    
                        <div class="box-event-modern">
                            <div class="event-item-modern  overflow-auto">
                                <h4 style="margin: 1vh;"><?= $valeurs['id']; ?> : id du produit</h4>
                                <h4 style="margin: 1vh;"><?= $valeursdeux['libelle']; ?></h4>
                                <h4 class="event-item-modern-title"><?= $valeurs['nom']; ?></h4>
                                <p class="event-time"> prix : <?= $valeurs['prix_produit']; ?> € </p>
                                <img src="<?= $valeurs['img']; ?>" alt="">
                                <p class="event-time" style="overflow: auto;"><?= $valeurs['img']; ?></p>
                                <div class="event-item-modern-text">
                                    <p>Description : <?= $valeurs['description_produit'] ?></p>
                                    <a href="supp.php?id=<?=$valeurs['id']; ?>" style="background: red; color: white;">Supprimer de la table</a>
                                    <a href="modifie.php?id=<?=$valeurs['id']; ?>" style="background: blue; color: white;">Modifier dans la table</a>
                                    <a href="modifiecarou.php?id=<?=$valeurs['id']; ?>" style="background: violet; color: white;">Ajoutez l'image au carousel</a>
                                </div>
                            </div>
                        </div>
                    
                    
                    <?php
                    }
                    ?>
                    </div>
                    
                  <!-- fin des produits -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
                
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>

</body>
</html>