<?php
    Include("functions.php");
    Include("head.php");
    Include("navbar.php");
    ?>

    <body>
    <header style="padding-top: 15%;">
    <div class="card container" >
    <h5 class="card-header"><center>Ajouter un Produit ?</center></h5>
        <div class="card-body">
            <p class="card-text"><center>Le produit a été ajouté avec succés ! </center></p>
            <a href="index.php" class="btn submit-btn w-50 mt-4 p-2 float-right" style="border-radius: 20px;">Revenir à la page d'accueil</a>
        </div>
    </div>
    </header>
    <?php
        if (isset($_POST["submit"])){
            if (isset($_POST["nom"])) {
                $nom = $_POST["nom"];
                echo "</br>";
                //var_dump($nom);
            }
            if (isset($_POST["prix"])) {
                $prix = $_POST["prix"];
                echo "</br>";
                //var_dump($prix);
            }
            if (isset($_POST["cat"])) {
                $cat = $_POST["cat"];
                $id_cat = IdFromCat($cat)["id"];
                echo "</br>";
                //var_dump($id_cat);
            }
            if (isset($_POST["details"])) {
                $details = $_POST["details"];
                echo "</br>";
                //var_dump($details);
            }
            ajouteProduit($nom, $prix, $details, 0);
            $id_prod = getIdFromProd($nom)["id"];
            //var_dump($id_prod);
            ProdCat($id_cat, $id_prod);
            if ( isset($_FILES['fic']) )
            {
                transfert();
                ImgProd($id_prod);
            }
            
        }
      ?>
  </body>