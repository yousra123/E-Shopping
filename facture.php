<?php
    Include("head.php");
    //Include("navbar.php");
    Include("functions.php");
    session_start();
?>
<body >
    <?php 
        if (isset($_SESSION["prix"])) {
            if (isset($_SESSION["id"]) ){
                ajouterCommande($_SESSION["prix"]);
                userCommande($_SESSION["id"]);
                /* $liste_produits = produitsAuPanier();
                foreach ($liste_produits as $produit) {

                    } */
                }
            }
    ?>
    <div class="container" style="padding-top: 5%; border-bottom: 1px solid #000000;">
        <h1 class="display-4" style="color: black; padding-top: 10%;"><center>Votre commande a été passé correctement !</center></h1>
        <p class="lead"><center>Vous avez acheté :</center></p>
    </div>
    <?php
        $liste_produits = produitsAuPanier();?>
        <div class="container" style="padding-top: 5%;">
        <?php
        foreach ($liste_produits as $produit) {
            $details = details_produit($produit["id"]);
            //var_dump($details);?>
            <div class="container">
                <h4 style="color: black; display: inline;"><?php echo $details["nom"] ?></h4>
                <h5 style="color: black;" class="float-right" ><?php echo $details["prix"] ?> Dhs</h5>
            </div>
        <?php
        } 
        ?>
        <hr>
        <div class="container">
                <h4 style="color: black;">Prix total de la commande</h4>
                <h5 style="color: black;" class="float-right" ><?php $prix = prixTotalPanier(); echo $prix["SUM(prix)"] ?> Dhs</h5>
        </div>
        </div>
        <?php
            selectedTo0();
            ?>
