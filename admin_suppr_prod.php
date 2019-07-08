<?php   
    Include("head.php");
    Include("functions.php");
    ?>
<body>
<div class="card container">
    <h5 class="card-header"><center>Supprimer un produit ?</center></h5>
        <div class="card-body">
            <p class="card-text"><center>Le produit a été supprimé avec succès </center></p>
            <a href="index.php" class="btn submit-btn w-50 mt-4 p-2 float-right" style="border-radius: 20px;">Revenir à la page d'accueil</a>
        </div>
    </div>
    <?php
        if (isset($_GET["prod"])) {
            deleteProd($_GET["prod"]);
        }
    ?>
</body>                    
