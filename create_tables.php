<?php
include("functions.php");


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';
$con = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $con ){
    echo 'Connected failure<br>';
}
echo 'Connected successfully<br>';
$sql = "CREATE DATABASE E_shopping";

if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($con);
}

mysqli_select_db($con, "E_shopping");

//table pour les catégories
mysqli_query($con, "CREATE TABLE categories (id INT PRIMARY KEY AUTO_INCREMENT, nom VARCHAR(250));");
    
//table pour les produits
mysqli_query($con, "CREATE TABLE produits (id INT PRIMARY KEY AUTO_INCREMENT, nom VARCHAR(250), prix INT NOT NULL, details VARCHAR(100), selected INT, img BLOB NOT NULL);");

//table produits_categorie
mysqli_query($con, "CREATE TABLE produits_commande (id_prod INT, FOREIGN KEY (id_prod) REFERENCES produits(id), id_cat INT, FOREIGN KEY (id_cat) REFERENCES categories(id));");
//table utilisateurs
mysqli_query($con, "CREATE TABLE users (id INT PRIMARY KEY AUTO_INCREMENT, nom VARCHAR(250), prenom VARCHAR(250), mail VARCHAR(250), mdp VARCHAR(250));");

//table pour les commandes
mysqli_query($con, "CREATE TABLE commandes (id INT PRIMARY KEY AUTO_INCREMENT, prix_total INT);");

//table user_commande
mysqli_query($con, "CREATE TABLE user_commande (id_user INT, FOREIGN KEY (id_user) REFERENCES users(id), id_commande INT, FOREIGN KEY (id_commande) REFERENCES commandes(id));");

//table pour les images
mysqli_query($con,"CREATE TABLE `images` (`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, `img_nom` VARCHAR(50) NOT NULL,`img_blob` BLOB NOT NULL);");

//table produits_image
mysqli_query($con, "CREATE TABLE produit_image (id_img INT, FOREIGN KEY (id_img) REFERENCES images(id), id_prod INT, FOREIGN KEY (id_prod) REFERENCES produits(id));");


