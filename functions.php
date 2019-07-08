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
    $res = mysqli_prepare($con, "SELECT id_prod FROM produits_commande WHERE id_cat = ?;");
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
function ajouterCommande($prix){
    $con = con();
    $stmt = mysqli_prepare($con, "INSERT INTO commandes (prix_total) VALUES (?)");
    //var_dump($stmt);
    mysqli_stmt_bind_param($stmt, 'i', $prix);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}

//fonction qui crée le lien utilisateur-commande 
function userCommande($id_user) {
    $con = con();
    $query = mysqli_query($con, "SELECT max(id) FROM commandes");
    $id_com = mysqli_fetch_assoc($query);
    //var_dump($id_com);
    mysqli_free_result($query);
    $stmt = mysqli_prepare($con, "INSERT INTO user_commande (id_user, id_commande) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, 'ii', $id_user, $id_com["max(id)"]);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
} 


//fonction qui supprime une catégorie donnée et tous ses produits
function supprimeCat($nom) {
    //Il faut que le nom de la catégorie soit unique
    $con = con();
    $stmt = mysqli_prepare($con, "DELETE FROM categories WHERE nom = ?");
    mysqli_stmt_bind_param($stmt, 's', $nom);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}

//fonction qui crée une nouvelle catégorie
function ajouteCat($nom) {
    $con = con();
    $stmt = mysqli_prepare($con, "INSERT INTO `categories`(`nom`) VALUES (?)");
    mysqli_stmt_bind_param($stmt, 's', $nom);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}

//fonction qui ajoute un nouveau produit appartenant à une catégorie existante
function ajouteProduit($nom, $prix, $details, $sel) {
    $con = con();
    //$stmt = mysqli_query($con, "INSERT INTO produits (nom, id_cat, prix, details, selected) VALUES ($nom, $cat, $prix, $details, $sel)");
    $stmt = mysqli_prepare($con, "INSERT INTO produits (nom, prix, details, selected) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sisi', $nom, $prix, $details, $sel);
    mysqli_stmt_execute($stmt); 
    //var_dump($stmt);
    mysqli_close($con);
}

//fonction qui crée la partenance produit-catégorie
function ProdCat($id_cat, $id_prod) {
    $con = con();
    $stmt = mysqli_prepare($con, "INSERT INTO produits_commande (id_prod, id_cat) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, 'ii', $id_prod, $id_cat);
    mysqli_stmt_execute($stmt); 
    var_dump($stmt);
    mysqli_close($con);
}

//fonction qui retourne l'identifiant d'un produit à partir de son nom
function getIdFromProd($nom) {
    $con = con();
    $res = mysqli_prepare($con, "SELECT id FROM produits WHERE nom = ?;");
    mysqli_stmt_bind_param($res, 's', $nom);
    mysqli_stmt_execute($res);
    $data = mysqli_stmt_get_result($res);
    $assoc = mysqli_fetch_assoc($data);
    mysqli_free_result($data);
    mysqli_close($con);
    return $assoc;
}

//fonction qui crée un nouveau utilisateur
function ajouteUtilis($mail, $mdp, $nom, $prenom) {
    $con = con();
    $res = mysqli_prepare($con, "INSERT INTO `users`(`nom`, `prenom`, `mail`, `mdp`) VALUES (?, ?, ?, ?);");
    mysqli_stmt_bind_param($res, 'ssss', $nom, $prenom, $mail, $mdp);
    mysqli_stmt_execute($res);
    /* $data = mysqli_stmt_get_result($res);
    var_dump($data);
    $assoc = mysqli_fetch_assoc($data); */
    /* var_dump($stmt);
    echo mysqli_error($con); */
    mysqli_close($con);
}

//fonction qui retourne l'identifiant d'un utilisateur à partir de son adresse mail
function getIdFromMail($mail) {
    $con = con();
    $stmt = mysqli_query($con, "SELECT id FROM users WHERE mail = $mail;");
    $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_free_result($res);
    mysqli_close($con);
    return $assoc;
}

//fonction qui retourne l'identifiant d'une catégorie à partir de son nom
function IdFromCat($nom) {
    $con = con();
    $res = mysqli_prepare($con, "SELECT id FROM categories WHERE nom = ?;");
    mysqli_stmt_bind_param($res, 's', $nom);
    mysqli_stmt_execute($res);
    $data = mysqli_stmt_get_result($res);
    $assoc = mysqli_fetch_assoc($data);
    mysqli_free_result($data);
    mysqli_close($con);
    return $assoc;
}

//fonction qui met le champ selected d'un produit à 1 quand on appuie sur ajouter au panier
function selctedTo1($id) {
    $con = con();
    $stmt = mysqli_prepare($con, "UPDATE produits SET selected = 1 WHERE id = ?;");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}

//fonction qui remet tous les produits à selected = 0
function selectedTo0() {
    $con = con();
    $stmt = mysqli_query($con, "UPDATE produits SET selected = 0;");
    mysqli_close($con);  
}

//fonction qui met un produit à selected = 0
function selectedTo0Pr($id) {
    $con = con();
    $stmt = mysqli_prepare($con, "UPDATE produits SET selected = 0 WHERE id = ?;");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}

//fonction qui ajoute un produit donné dans la commande correspondante
function produitCammande($com, $prod) {
    $con = con();
    $stmt = mysqli_query($con, "INSERT INTO `produits_pour_commande`(`id_produit`, `id_commande`) VALUES ($prod, $com);");
    mysqli_close($con);
}

//fonction qui retourne la liste des produits ajoutés au panier
function produitsAuPanier() {
    $con = con();
    $res = mysqli_query($con, "SELECT id FROM produits WHERE selected = 1;");
    $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_free_result($res);
    mysqli_close($con);
    return $assoc;
}

//fonction qui calcule le prix total des articles séléctionnés
function prixTotalPanier() {
    $con = con();
    $res = mysqli_query($con, "SELECT SUM(prix) FROM produits WHERE selected = 1;");
    $assoc = mysqli_fetch_assoc($res);
    mysqli_free_result($res);
    mysqli_close($con);
    return $assoc;
}

//fonction qui retourne l'id de l'utilisateur à partir de son adresse mail et de son password
function utilisateurId($mail, $mdp) {
    $con = con();
    $res = mysqli_query($con, "SELECT id FROM users WHERE mail = $mail AND mdp = $mdp;");
    $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_free_result($res);
    mysqli_close($con);
    return $assoc;
}

//fonction qui retourne l'id d'une commande
function commandeId($id_user, $prix) {
    $con = con();
    $res = mysqli_query($con, "SELECT id FROM commandes WHERE id_user = $id_user AND prix_total = $prix;");
    $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_free_result($res);
    mysqli_close($con);
    return $assoc;
}

//fonction qui supprime une catégorie en utilisant son id
function deleteCat($id) {
    $con = con();
    $stmt = mysqli_prepare($con, "DELETE FROM `produits` WHERE id_cat = ?;");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $query = mysqli_prepare($con, "DELETE FROM `categories` WHERE id = ?;");
    mysqli_stmt_bind_param($query, 'i', $id);
    mysqli_stmt_execute($query);
    mysqli_close($con);
}

//fonction qui supprime un produit
function deleteProd($id) {
    $con = con();
    $stmt = mysqli_prepare($con, "DELETE FROM `produits` WHERE id = ?;");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}

//fonction qui retourne le nom d'une catégorie à partir de son id
function catFromId($id) {
    $con = con();
    //var_dump($con);
    $res = mysqli_query($con, "SELECT nom FROM categories WHERE id = $id;");
    /* mysqli_stmt_bind_param($res, 'i', $id);
    mysqli_stmt_execute($res); */
    //var_dump($res);
    /* var_dump($res);
    echo "</br>";
    echo mysqli_error($con); */
    $assoc = mysqli_fetch_assoc($res);
    mysqli_free_result($res);
    mysqli_close($con);
    return $assoc;
}

//fonction qui modifie les infos d'un produits
function modifieProd($id, $nom, $prix, $details) {
    $con = con();
    $stmt = mysqli_prepare($con, "UPDATE produits SET nom = ?, prix = ?, details = ? WHERE id = ?;");
    mysqli_stmt_bind_param($stmt, 'sisi',$nom, $prix, $details, $id);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}

//fonction qui modifie le nom d'une catégorie
function modifieCatNom($id, $nom) {
    $con = con();
    $stmt = mysqli_prepare($con, "UPDATE categories SET nom = ? WHERE id = ?;");
    mysqli_stmt_bind_param($stmt, 'si',$nom, $id);
    mysqli_stmt_execute($stmt);
    mysqli_close($con);
}

//fonction qui retourne l'identifiant d'une catégorie à laquelle appartient un produit donné
function getCatFromProd($id) {
    $con = con();
    $res = mysqli_query($con, "SELECT id_cat FROM produits_commande WHERE id_prod = $id;");
    //var_dump($res);
    /* mysqli_stmt_bind_param($res, 'i', $id);
    mysqli_stmt_execute($res); */
    $assoc = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_free_result($res);
    mysqli_close($con);
    return $assoc;
}
?>