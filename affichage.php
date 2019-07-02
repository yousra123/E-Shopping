<?php
    Include("head.php");
    Include("navbar.php");
    ?>
    <body class="container" style="background-image: linear-gradient(#696969, #00CED1);">


<?php
    Include("functions.php");
    ?>
        <?php
            $com = 0;
            $categories = categories();
            /* var_dump($categories);
            echo "</br>"; */
            foreach ($categories as $cat){?>
                
                <?php      
                echo "</br>";  
                $id_produits = produits($cat["id"]);
                $nom = $cat["nom"];
                ?>
                                
                <div class="row m-2" style="padding-top: 5%;">
                    <div class="text-center" >
                        <h2><?php echo $nom; ?></h2>
                    </div>
                </div>
                <?php
                foreach ($id_produits as $id_p) {
                    $produit = details_produit($id_p["id"]);?>
                    <div class="row">
                    <div class="col align-middle">
                    <div class="text-left ml-lg-5 mr-0 card-receive mt-3 text-light w-auto">
                        <h4><center><?php echo $produit["nom"] ?></center></h4>
                        <img src="img2.jpeg" class="card-img-top float-right" alt="..." style="width: 10%; height: 10%; ">
                        <h5 class="float"><center><?php echo $produit["details"] ?></center></h5><br>
                        <div class="mt-3 money">
                            <h2><?php echo $produit["prix"] ?> €</h2>
                            <a href="commande.php/?com=<?php echo ++$com?>&id_produit=<?php echo $id_p["id"]?>" class="btn details-btn float-right">Ajouter au panier</a>
                        </div>
                    </div>
                    </div>
                </div>
                    <div class="col-0 col-center"><span></span></div>
                    <!-- <div class="shadowbox" style="width: 18rem;">
                    
                        <img src="img.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php //echo $produit["nom"]; ?></h5>
                            <?php //echo "</br>";?>
                            <p class="card-text"><?php //echo $produit["prix"] ." dhs"; echo "</br>"; echo $produit["details"]; echo "</br>";?></p>
                            <hr>
                            <a href="#" class="btn btn-primary">Ajouter au panier</a>
                        </div>
                    </div> -->
                    <?php
                }            
            }
            
        ?>           
    </body>
</html>



               
                
                    
                   
                

           <!--  </div>

            <div class="col-0 col-center"><span></span></div>
            <div class="row">
   <div class="col align-middle">
                    <div class="text-left ml-lg-5 mr-0 card-receive mt-3 text-light w-auto">
                        <h4><?php //echo "ghdkcs" ?></h4>
                        <h5 class="float-right"><?php //echo "bhkcf" ?></h5><br>
                        <div class="mt-3 money">
                            <h2><?php //echo "hdscj" ?> €</h2>
                            <a href="#" class="btn details-btn float-right">Détails</a>
                        </div>
                    </div>
                    </div> -->