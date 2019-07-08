<?php   
    Include("head.php");
    Include("functions.php");
    ?>
    <body >
    <?php   
        if (isset($_POST["submit"])) {
            if (isset($_POST["passwrd"])) {
                if ($_POST["passwrd"] != "admin"){
                    ?>
                    <div class="card container">
                        <h5 class="card-header"><center>Mot de passe incorrect</center></h5>
                        <div class="card-body">
                            <!-- <h5 class="card-title">Déoslé</h5> -->
                            <p class="card-text"><center>Désolé! Vous ne pouvez pas accéder au compte administrateur du site! </center></p>
                            <a href="affichage.php" class="btn submit-btn w-50 mt-4 p-2 float-right" style="border-radius: 20px;">Revenir à la page d'accueil</a>
                        </div>
                    </div>
                    <?php
                }
                else {
                    ?>
                    <div class="jumbotron jumbotron-fluid " style="background: linear-gradient(0.05turn, #00000000, rgba(0,0,0,0.8));"">
                        <div class="container">
                            <h1 class="display-4"><center>Administration</center></h1>
                            <p class="lead"><center>Bienvenue dans le compte admin</center></p>
                        </div>
                    </div>
                    <!-- <ul class="add-new">
                        <li style="padding-top: 10%;">
                            <a class="link" href="admin_modif_cat.php" style="padding-left: 30%; color: black;">Supprimer une catégorie</a>
                        </li>
                        <li style="padding-top: 2%;">
                            <a class="link" href="admin_ajoute_cat.php" style="padding-left: 30%; color: black;">Ajouter une catégorie</a>
                        </li>
                        <li style="padding-top: 2%;">
                            <a class="link" href="admin_modif_cat.php?modif=1" style="padding-left: 30%; color: black;">Modifier une catégorie</a>
                        </li>
                    </ul> -->
                    <!-- <div class="row"> -->
                    <h1 class="display-4"><center>Liste des catégories</center></h1>
                    <ul class="add-new">
                    <?php
                        $cats = categories();
                        foreach ($cats as $cat){?>
                    
                        <li style="padding-top: 2%;">
                            <a class="link" href="admin_modif_cat.php" style="padding-left: 45%; color: black;"><?php echo $cat["nom"]?></a>
                            <!-- <form class="container">
                                <button type="submit" class="btn btn-sm float-right" name="delete<?php echo $cat["id"]?>">Supprimer</button>
                                <button type="submit" class="btn btn-sm float-right" name="edit">Éditer</button>
                            </form> -->
                            <a class="btn submit-btn w-50 mt-4 p-2" style="border-radius: 20px; display: block; margin : auto;" name="submit" href="admin_suppr_cat.php?cat=<?php echo $cat["id"]; ?>" role="button">Supprimer</a>
                            <a class="btn submit-btn w-50 mt-4 p-2" style="border-radius: 20px; display: block; margin : auto;" name="submit" href="admin_modifier_cat.php?cat=<?php echo $cat["id"]; ?>" role="button">Éditer</a>
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
                        </div> 
                    </div>
                            <?php
                               /*  if((isset($_GET["delete"]))){
                                    header("Location:admin_suppr_cat.php")
                                } */
                            ?>
                        </li>
                        <?php 
                        }?>
                    </ul>
                    <!-- </div> -->
                    <!-- <div class="wrapper">
                        <div class="sidebar" >
                            <div class="sidebar" style="padding-top: 10%;">
                                <h4 > Liste des catégories : </h4>
                                <ul class="add-new">
                                    <?php
                                        //$cats = categories();
                                        //foreach ($cats as $cat){?>
                                            <li style="padding-top: 20%;">
                                                <a class="btn" href="#"><?php //echo $cat["nom"]?></a>
                                            </li>
                                        <?php
                                       // }
                                    ?>
                            </div>
                        </div>
                    </div>    --> 
                    <div class="wrapper">
                        <div class="sidebar" >
                            <div class="sidebar" style="padding-top: 10%;">
                                <h4><center> Menu : </center></h4>
                                <ul class="add-new">
                                    <li style="padding-top: 20%;">
                                        <a class="btn" href="admin_ajoute_cat.php">Nouvelle catégorie</a>
                                    </li>
                                    <li style="padding-top: 20%;">
                                        <a class="btn" href="index.php">Accueil</a>
                                    </li>
                            </div>
                        </div>
                    </div>                                           
                    <?php
                        
                }
            }
        }
        ?>