<?php
    Include("functions.php");
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
        }
    ?>