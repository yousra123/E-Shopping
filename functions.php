<?php
include("variables.php");

// Établit une connexion à la base
function con() {
    return mysqli_connect($GLOBALS['Server'], $GLOBALS['User'], $GLOBALS['passwrd'], $GLOBALS['database']);
}

//fonction qui retourne la liste des catégories 
function categories() {
    $con = con();
    $res = mysqli_query($con, "SELECT * FROM categories;");
    $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_free_result($res);
    mysqli_close($con);
    return $assoc;
}

//fonction qui retourne la liste des produits d'une catégories donnée
function produits($id) {
    $con = con();
    $res = mysqli_prepare($con, "SELECT id FROM produits WHERE id_cat = ?;");
    mysqli_stmt_bind_param($res, 'i', $id);
    mysqli_stmt_execute($res);
    $data = mysqli_stmt_get_result($res);
    $assoc = mysqli_fetch_all($data, MYSQLI_ASSOC);
    mysqli_free_result($data);
    mysqli_close($con);
    return $assoc;
}

//fonction qui retourne les détails d'un produit à partir de son id
function details_produit($id) {
    $con = con();
    $res = mysqli_prepare($con, "SELECT * FROM produits WHERE id = ?;");
    mysqli_stmt_bind_param($res, 'i', $id);
    mysqli_stmt_execute($res);
    $data = mysqli_stmt_get_result($res);
    $assoc = mysqli_fetch_assoc($data);
    mysqli_free_result($data);
    mysqli_close($con);
    return $assoc;
}

//fonction qui crée une nouvelle commande
function ajouterCommande(){
    $con = con();
    $res = mysqli_query($con, "INSERT INTO `commandes`(`id_user`, `prix_total`) VALUES (0, 0)");
    $assoc = mysqli_fetch_assoc($res);
    mysqli_close($con);
}



?>