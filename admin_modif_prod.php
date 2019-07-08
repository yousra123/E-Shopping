<?php
    Include("head.php");
    Include("functions.php");
?>

<body  class="container">
    <div class="jumbotron jumbotron-fluid " style="background-color: #696969">
        <div class="container">
            <h1 class="display-4"><center>Administration</center></h1>
            <p class="lead"><center>Bienvenue dans le compte admin</center></p>
        </div>
    </div>
    
    <div class="container" style="padding-top: 5%; border-bottom: 1px solid #000000; padding-left: 20%;">
        <h1 class="display-4" style="color: black; padding-top: 10%;"><center>Modifier un produit</center></h1>
        <p class="lead"><center>Veuillez spécifier les nouvelles caractéristiques de ce produit en remplissant le formulaire ci-dessous :</center></p>
    </div>
<?php
    if (isset($_GET["prod"])){
        $produit = details_produit($_GET["prod"]);
        /* $nom = $produit["nom"];
        $prix = $produit["prix"];
        $details = $produit["details"];
        $id = $_GET["prod"]; */
        //var_dump($produit);
?>
<form class="container" style="padding-top: 5%; padding-left: 20%;" method="POST" action="admin_modif_prod.php?prod=<?php echo $_GET["prod"]; ?>">
        <div class="form-row ">
            <div class="form-group col-md-6">
            <!-- <label for="produit">Nom</label> -->
            <input class="form-control" id="produit" name="nom" placeholder="<?php echo $produit["nom"] ?>">
            </div>
            <div class="form-group col-md-6">
            <!-- <label for="prix">Prix</label> -->
            <input class="form-control" id="prix" name="prix" placeholder="<?php echo $produit["prix"] ?>">
            </div>
            </div>
            <select class="form-control" name="cat">
                <option><?php $id_cat = getCatFromProd($produit["id"]); $cat = catFromId($id_cat[0]["id_cat"]); /* var_dump($produit["id_cat"]); */  echo $cat["nom"];  ?></option>
            </select>
        
        <div class="form-group" style ="padding-top: 1.5%;">
            <textarea class="form-control" id="descr" rows="3" name="details" placeholder="<?php echo $produit["details"] ?>"></textarea>
        </div>
        <div class="container">
            <button type="submit" class="btn submit-btn w-50 mt-4 p-2 float-right" style="border-radius: 20px;" name="submit">Enregistrer les modifications </button>
        </div>
    </form>   
    <?php
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
    <?php
        if (isset($_POST["submit"])){
            $produit = details_produit($_GET["prod"]);
            $nom = $produit["nom"];
            $prix = $produit["prix"];
            $details = $produit["details"];
            $id = $produit["id"];
            if (isset($_POST["nom"])) {
                $nom = $_POST["nom"];
                var_dump($nom);
            }
            if (isset($_POST["prix"])) {
                $prix = $_POST["prix"];
                var_dump($prix);
            }
            if (isset($_POST["details"])) {
                $details = $_POST["details"];
                var_dump($details);
            }
            modifieProd($id, $nom, $prix, $details);
        }
    ?>