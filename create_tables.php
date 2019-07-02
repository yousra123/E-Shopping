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
mysqli_query($con, "CREATE TABLE produits (id INT PRIMARY KEY AUTO_INCREMENT, nom VARCHAR(250), id_cat INT, FOREIGN KEY (id_cat) REFERENCES categories(id), prix INT NOT NULL, details VARCHAR(100));");

//table utilisateurs
mysqli_query($con, "CREATE TABLE users (id INT PRIMARY KEY AUTO_INCREMENT, nom VARCHAR(250), prenom VARCHAR(250), mail VARCHAR(250), mdp VARCHAR(250));");

//table pour les commandes
mysqli_query($con, "CREATE TABLE commandes (id INT PRIMARY KEY AUTO_INCREMENT, id_user INT, FOREIGN KEY (id_user) REFERENCES users(id), prix_total INT);");

//table produits_pour_commande
mysqli_query($con, "CREATE TABLE produits_pour_commande (id_produit INT, FOREIGN KEY (id_produit) REFERENCES produits(id), id_commande INT, FOREIGN KEY id_commande REFERENCES commandes(id));");


