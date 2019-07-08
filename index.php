<?php
    Include("head.php");
    Include("navbar.php");
    ?>
    <body >


<?php
    Include("functions.php");
    ?>
        <div class="container">
        <?php
            $com = 0;
            $categories = categories();
            foreach ($categories as $cat){?>                
                <?php      
                $id_produits = produits($cat["id"]);
                $nom = $cat["nom"];
                ?>
                                
                <div class="row m-2" style="padding-top: 10%;">
                    <div class="text-center" >
                        <h2><?php echo $nom; ?></h2>
                    </div>
                </div>
                <?php
                foreach ($id_produits as $id_p) {
                    /* var_dump($id_p);
                    echo "</br>"; */
                    $produit = details_produit($id_p["id_prod"]);?>
                    <div class="row">
                    <div class="col align-middle">
                    <div class="text-left ml-lg-5 mr-0 card-receive mt-3 text-light w-auto">
                        <h4><center><?php echo $produit["nom"] ?></center></h4>
                        <img src="img2.jpeg" class="card-img-top float-right" alt="..." style="width: 10%; height: 10%; ">
                        <h5 class="float"><center><?php echo $produit["details"] ?></center></h5><br>
                        <div class="mt-3 money">
                            <h2><?php echo $produit["prix"] ?> Dhs</h2>
                            <a href="index.php?id_produit=<?php echo $id_p["id_prod"]?>" class="btn details-btn float-right" name="panier">Ajouter au panier</a>
                        </div>
                    </div>
                    </div>
                </div>
                    <div class="col-0 col-center"><span></span></div>
                    <?php
                            if (isset($_GET["id_produit"])){
                                selctedTo1($_GET["id_produit"]);
                            }
                    ?>
                    <?php
                }            
            }
            
        ?> 
       </div>           
    </body>
</html>



               
                
                    
                   
                

