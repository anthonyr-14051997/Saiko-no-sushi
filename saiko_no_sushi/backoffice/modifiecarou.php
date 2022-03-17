<?php
session_start();

if(!$_SESSION['mdp']){
    header('Location: connection.php');
    exit;

} else {
    $loginOK = true;
}

include 'bdd.php';

/* modifier le carousel */


if(isset($_GET['id']) AND !empty($_GET['id'])) {
    
    $id = $_GET['id'];
    $recupProd = $bdd->prepare('SELECT * FROM produits WHERE id_categorie = ?');
    $recupProd->execute($id);
    $recupProdeux = $bdd->query('SELECT * FROM catégories');
    $valeursdeux = $recupProdeux->fetch();
    $valeurs = $recupProd->fetch();

    if ($recupProdeux->rowCount() > 1){
        $updateprod = $bdd->prepare('UPDATE carousel SET id_produits WHERE id = ?');
        $updateprod->execute(array($id));
    }

    header('Location: produits.php');
    exit;

} else {
    ?> <style> .dessertmodife {display: none;} </style> <?php
}

?>