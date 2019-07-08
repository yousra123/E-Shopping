<?php
    Include("head.php");
    Include("functions.php");
?>

<body  >
    <div class="jumbotron jumbotron-fluid " style="background-color: #696969">
        <div class="container">
            <h1 class="display-4"><center>Administration</center></h1>
            <p class="lead"><center>Bienvenue dans le compte admin</center></p>
        </div>
    </div>
    
    <div class="container">
    <div class="container" style="padding-top: 5%; border-bottom: 1px solid #000000; padding-left: 20%;">
        <h1 class="display-4" style="color: black; padding-top: 10%;"><center>Ajouter un nouveau produit</center></h1>
        <p class="lead"><center>Veuillez spécifier les caractéristiques du nouveau produit que vous voulez ajouter en remplissant le formulaire ci-dessous :</center></p>
    </div>
    
    <form class="container" style="padding-top: 5%; padding-left: 20%;" method="POST" action="admin_produit_ajoute.php">
        <div class="form-row ">
            <div class="form-group col-md-6">
            <!-- <label for="produit">Nom</label> -->
            <input class="form-control" id="produit" name="nom" placeholder="Nom du produit">
            </div>
            <div class="form-group col-md-6">
            <!-- <label for="prix">Prix</label> -->
            <input class="form-control" id="prix" name="prix" placeholder="Prix">
            </div>
            <!-- <div class="form-group col-md-4">
             <label for="prix">Prix</label> 
            <input class="form-control" id="cat" placeholder="Catégorie">
            </div> -->
            </div>
            <select class="form-control" name="cat">
                <option>Choisissez une catégorie</option>
            <?php
                $cats = categories();
                foreach ($cats as $cat){?>
                    <option><?php echo $cat["nom"]?></option>
                <?php
                }
                ?>
            </select>
        
        <div class="form-group" style ="padding-top: 1.5%;">
            <!--  <label for="descr">Description</label> -->
            <textarea class="form-control" id="descr" rows="3" name="details" placeholder="Entrer des détails du nouveau produit"></textarea>
        </div>
        <div class="container">
            <button type="submit" class="btn submit-btn w-50 mt-4 p-2 float-right" style="border-radius: 20px;" name="submit">Ajouter </button>
        </div>
    </form>
    <div class="wrapper">
                        <div class="sidebar" >
                            <div class="sidebar" style="padding-top: 10%;">
                                <h4><center> Menu : </center></h4>
                                <ul class="add-new">
                                 <!--    <li style="padding-top: 20%;">
                                        <a class="btn" href="admin_ajoute_prod.php?cat=<?php //echo $_GET["cat"]; ?>">Ajouter un nouveau produit</a>
                                    </li> -->
                                    <li style="padding-top: 20%;">
                                        <a class="btn" href="index.php">Accueil</a>
                                    </li>
                            </div>
                        </div>
                    </div>     
    <?php
        /* if (isset($_POST["submit"])){
            if (isset($_POST["nom"])) {
                $nom = $_POST["nom"];
                //var_dump($nom);
            }
            if (isset($_POST["prix"])) {
                $prix = $_POST["prix"];
                //var_dump($prix);
            }
            if (isset($_POST["cat"])) {
                $cat = $_POST["cat"];
                $id_cat = IdFromCat($cat)["id"];
                //var_dump($id_cat);
            }
            if (isset($_POST["details"])) {
                $details = $_POST["details"];
                //var_dump($details);
            }
            ajouteProduit($nom, $id_cat, $prix, $details, 0);
        } */
    ?>
    </div>
</body>