<?php   
    Include("head.php");
    Include("functions.php");
    ?>
<body>
<div class="card container">
    <h5 class="card-header"><center>Supprimer une catégorie ?</center></h5>
        <div class="card-body">
            <p class="card-text"><center>La catégorie a été supprimé avec succès </center></p>
            <a href="index.php" class="btn submit-btn w-50 mt-4 p-2 float-right" style="border-radius: 20px;">Revenir à la page d'accueil</a>
        </div>
    </div>
    <?php
        if (isset($_GET["cat"])) {
            deleteCat($_GET["cat"]);
        }
    ?>
</body>                    
