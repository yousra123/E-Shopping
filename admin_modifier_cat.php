<?php   
    Include("head.php");
    Include("functions.php");
    ?>
<body>
    <div class="jumbotron jumbotron-fluid " style="background: linear-gradient(0.05turn, #00000000, rgba(0,0,0,0.8));">
        <div class="container">
            <h1 class="display-4"><center>Administration</center></h1>
            <p class="lead"><center>Bienvenue dans le compte admin</center></p>
        </div>
    </div>
    <div class="container" style="padding-top: 5%;">
    <h5><center> Veuillez saisir le nouveau nom de la catégorie, si c'est ce que vous voulez modifier : </center></h5>
    <form class="form-inline container" style="padding-top: 2%; padding-left: 15%;" method="POST" action="admin_modifier_cat.php?cat=<? echo $_GET["cat"];?> ">
        <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" >
        </div>
        
        <div class="form-group mx-sm-3 mb-2">
<!--             <label for="cat" class="sr-only">Veuillez saisir le nouveau de la catégorie :</label> -->
            <?php  
                if (isset($_GET["cat"])) {
                    $nom_cat = catFromId($_GET["cat"]);
                    //var_dump($nom_cat);
                 
                 ?>
            <input class="form-control" id="cat" name="cat" placeholder="<?php echo $nom_cat["nom"] ?>">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit">Valider</button>
    </form>
    <?php
        if (isset($_POST["submit"])) {
            if (isset($_POST["cat"])) {
                modifieCatNom($_GET["cat"], $_POST["cat"]);
            }
        }
    ?>
    </div>
    <div >
    <div class="container" style="padding-top: 5%; padding-left: 20%;">
        <h3 class="display-4" style="color: #696969;"><center>Liste des produits de la catégorie <?php echo $nom_cat["nom"]; ?></center></h3>
    </div>
    <div class="container" style="padding-left: 15%;">
    <?php
    $produits = produits($_GET["cat"]);
//var_dump($produits);
    foreach ($produits as $produit){
                    $details = details_produit($produit["id_prod"]);
                    //var_dump($details);
                    ?>
                    <li style="padding-top: 2%;">
                        <a class="link" href="admin_modif_cat.php" style="padding-left: 45%; color: black;"><?php echo $details["nom"]?></a>
                        <!-- <form class="container">
                            <button type="submit" class="btn btn-sm float-right" name="delete<?php //echo $cat["id"]?>">Supprimer</button>
                            <button type="submit" class="btn btn-sm float-right" name="edit">Éditer</button>
                        </form> -->
                        <a class="btn submit-btn w-50 mt-4 p-2" style="border-radius: 20px; display: block; margin : auto;" name="submit" href="admin_suppr_prod.php?prod=<?php echo $produit["id_prod"]; ?>" role="button">Supprimer</a>
                        <a class="btn submit-btn w-50 mt-4 p-2" style="border-radius: 20px; display: block; margin : auto;" name="submit" href="admin_modif_prod.php?prod=<?php echo $produit["id_prod"]; ?>" role="button">Éditer</a>
                        <div class="container">
                            <div class="container">
                                <div class="container">
                                    <div class="container">
                                        <div class="container">
                                            <div class="container">
                                                <div class="container">
                                                    <div class="container">
                                                        <div class="container">
                                                            <div class="container">
                                                                <div class="container">
                                                                    <div class="container">
                                                                        <div class="container">
                                                                            <div class="container">
                                                                                <div class="container">
                                                                                    <div class="container">
                                                                                        <hr class="container">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> 
                                                                    </div> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                   

    <?php
    }
    ?>
    </div>
    </div>
    <div class="wrapper">
                        <div class="sidebar" >
                            <div class="sidebar" style="padding-top: 10%;">
                                <h4><center> Menu : </center></h4>
                                <ul class="add-new">
                                    <li style="padding-top: 20%;">
                                        <a class="btn" href="admin_ajoute_prod.php?cat=<?php echo $_GET["cat"]; ?>">Ajouter un nouveau produit</a>
                                    </li>
                                    <li style="padding-top: 20%;">
                                        <a class="btn" href="index.php">Accueil</a>
                                    </li>
                            </div>
                        </div>
                    </div>     
    <?php
    }
    ?>