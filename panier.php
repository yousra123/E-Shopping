<?php
    Include("head.php");
    Include("navbar.php");
    Include("functions.php");
?>
<body >
    <div class="container" style="padding-top: 5%; border-bottom: 1px solid #000000;">
        <h1 class="display-4" style="color: black; padding-top: 10%;"><center>Votre panier est prêt</center></h1>
        <p class="lead"><center>Vous avez choisi d'acheter les articles suivant :</center></p>
    </div>
    <?php
        $liste_produits = produitsAuPanier();
        foreach ($liste_produits as $produit) {
            $details = details_produit($produit["id"]);
            //var_dump($details);?>
            <div class="container">
                <h4 style="color: black;"><?php echo $details["nom"] ?></h4>
                <h5 class="float" style="color: black;"><?php echo $details["details"] ?></h5><br>
                <h5 style="color: black;" class="float-right" ><?php echo $details["prix"] ?> Dhs</h5>
                    <a class="btn submit-btn w-50 mt-4 p-2" style="border-radius: 20px; display: block; margin : auto;" name="delete" href="panier.php?prod=<?php echo $produit["id"]; ?>&delete=1" role="button">enlever l'article du panier</a>
                <hr>
            </div>
        <?php
        if (isset($_GET["delete"]) && isset($_GET["prod"])) {
            selectedTo0Pr($_GET["prod"]);
        }
        } 
        ?>
        <div class="container">
                <h4 style="color: black;">Prix total de la commande</h4>
                <h5 style="color: black;" class="float-right" ><?php $prix = prixTotalPanier(); echo $prix["SUM(prix)"] ?> Dhs</h5>
        </div>
        <!-- <form method="POST" action="identification.php" style="padding-top: 2%;">
            <button type="submit" class="btn submit-btn w-50 mt-4 p-2 " style="border-radius: 20px; display: block; margin : auto; padding-top: 10%;" name="submit">Passer la commande</button>
        </form> -->
        <div style="padding-top: 2%;">
            <a class="btn submit-btn w-50 mt-4 p-2" style="border-radius: 20px; display: block; margin : auto;" name="submit" href="connexion.php?prix_total=<?php $prix = prixTotalPanier(); echo $prix["SUM(prix)"] ?>" role="button">Passer la commande</button>
        </div>