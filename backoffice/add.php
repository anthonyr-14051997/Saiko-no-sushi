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

if(isset($_POST['valider'])) {
    if(!empty(($_POST['newprod'])) AND !empty($_POST['prodnumb'])) {

        

        $getprod = htmlspecialchars($_POST['nom']);
        $getprice = $_POST['prix'];
        $getpicture = $_POST['img'];
        $getdescri = $_POST['descri'];
        $getcateg = $_POST['categ'];

        $insert = $bdd->prepare('INSERT INTO produits (nom_produit, prix, img_produit, description_produit, id-categorie) VALUES (?, ?, ?, ?)');
        $insert->execute(array($getprod, $getprice, $getpicture, $getdescri, $getcateg));

        header('Location: produits.php');
        exit;

    } else {
        echo "Le produit n'as pas été ajoutez";
    }
} else {
    echo "erreur l'action n'as pas pu être effectuer";
}

?>
