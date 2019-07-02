<?php
    Include("head.php");
    ?>

<?php
        if (isset($_POST["submit"])) {
            for ($j = 1; $j < $i; $j++){
                    if (isset($_POST[$j])){
                        $id_cat = $j;
                        break;
            }
        }
        $produits = produits($id_cat);
        foreach ($produits as $prod){?>
            <form method="POST" action="admin_modif_cat.php">
            <div class="form-check m-3" style="padding-left: 40%;">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1" name="<?php echo ++$i;?>">
                    <?php echo $prod["nom"]; ?>
                </label>
            </div>
        <?php
        }
        ?>
        <a class="btn submit-btn w-50 mt-4 p-2 float-right" style="border-radius: 20px;" name="submit" href="admin_produit.php" role="button">Valider le choix de la catégorie</button>
        </form>
        <?php
    }
?>