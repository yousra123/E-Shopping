<?php
    Include("head.php");
    Include("functions.php");
    ?>
    <body style="background-image: linear-gradient(#696969, #00CED1);">
    <div class="jumbotron jumbotron-fluid " style="background-color: #696969">
                        <div class="container">
                            <h1 class="display-4"><center>Administration</center></h1>
                            <p class="lead"><center>Bienvenue dans le compte admin</center></p>
                        </div>
                    </div>
                    
                    <?php
                        if (isset($_GET["modif"])){
                            if ($_GET["modif"] == 1) {
                                $i = 0;
                                $cats = categories();
                                foreach ($cats as $cat){?>
                                    <form method="POST" action="admin_modif_cat.php">
                                    <div class="form-check" style="padding-left: 40%;">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1" name="<?php echo ++$i;?>">
                                            <?php echo $cat["nom"]; ?>
                                        </label>
                                    </div>
                                <?php
                                }
                                ?>
                                <a class="btn submit-btn w-50 mt-4 p-2 float-right" style="border-radius: 20px;" name="submit" href="admin_produit.php" role="button">Valider le choix de la catégorie</button>
                                </form>
                                
                                 
                                
                                <?php   
                                
                                /* <!-- <li style="padding-top: 2%;">
                                    <a class="link" href="#" style="padding-left: 30%; color: black;">Ajouter un produit</a>
                                </li>
                                <li style="padding-top: 2%;">
                                    <a class="link" href="admin_connecte.php?modif=1" style="padding-left: 30%; color: black;">Supprimer un produit</a>
                                </li> --> */
                            }
                        }
                    ?>   
