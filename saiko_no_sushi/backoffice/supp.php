<?php
session_start();

if(!$_SESSION['mdp']){
    header('Location: connection.php');
    exit;

} else {
    $loginOK = true;
}

include 'bdd.php';

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    
    $getid = $_GET['id'];
    $recupProd = $bdd->prepare('SELECT * FROM produits WHERE id = ?');
    $recupProd->execute(array($getid));
    if($recupProd->rowCount() > 0){

        $suppProd = $bdd->prepare('DELETE FROM produits WHERE id = ?');
        $suppProd->execute(array($getid));

        header('Location: produits.php');
        exit;


    } else {
        echo "erreur ! pas de produit";
    }
} else {
    echo "erreur ! pas de produit.";
}

?>