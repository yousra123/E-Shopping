<?php   
    Include("head.php");
    Include("functions.php");
    ?>
<body >
    <div class="jumbotron jumbotron-fluid " style="background: linear-gradient(0.05turn, #00000000, rgba(0,0,0,0.8));"">
        <div class="container" >
            <h1 class="display-4"><center>Administration</center></h1>
            <p class="lead"><center>Bienvenue dans le compte admin</center></p>
        </div>
    </div>
    
    <form class="form-inline" style="padding-top: 2%; padding-left: 20%;" method="POST" action="admin_ajoute_cat.php">
        <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" >
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Catégorie</label>
            <input class="form-control" name="cat" placeholder="saisir le nom de la catégorie">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit">Valider</button>
        
    </form>
    <div style="padding-left: 20%;">
            <h3 style="color: black;"><center> Ajouter des produits d'<a class="link" href="admin_ajoute_prod.php" style="color: black;"> ici</a></center></h3>
    </div>
    <?php
        if (isset($_POST["submit"])) {
            if ($_POST["cat"] != ""){
                $new_cat = $_POST["cat"];
                ajouteCat($new_cat);
            }
        }
    ?>
    <div class="wrapper">
                        <div class="sidebar" >
                            <div class="sidebar" style="padding-top: 10%;">
                                <h4><center> Menu : </center></h4>
                                <ul class="add-new">
                                    <!-- <li style="padding-top: 20%;">
                                        <a class="btn" href="admin_ajoute_cat.php">Nouvelle catégorie</a>
                                    </li> -->
                                    <li style="padding-top: 20%;">
                                        <a class="btn" href="index.php">Accueil</a>
                                    </li>
                            </div>
                        </div>
                    </div>     
    
</body>