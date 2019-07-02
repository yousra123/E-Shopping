<?php   
    Include("head.php");
    Include("functions.php");
    ?>

<?php
    if (isset($_GET["com"]) && isset($_GET["id_produit"])) {
        if ($_GET["com"] != 0) {
            echo $_GET["com"];
            echo "</br>";
            echo $_GET["id_produit"]; 
        }
    }
    ?>