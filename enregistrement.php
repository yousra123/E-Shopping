<?php
    Include("head.php");
    //Include("navbar.php");
    //Include("functions.php");
    ?>
    
<body >
<form method="post" class="needs-validation" novalidate>

<!-- Vérification de l'unicité dans la base de données -->

        <div class="form-group" >
          <label for="name1">Prénom :</label>
          <input type="text" name="name1" class = "bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validName1 ?>" placeholder="Entrer votre Prénom" value="<?php echo $inputName1 ?>">
        </div>
        <div class="pb-3 invalid-feedback <?php echo $validName1 ?>">
          Entrez un prénom valide !
        </div>


        <div class="form-group" >
          <label for="name">Nom : </label>
          <input type="text" name="name" class = "bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validName ?>" placeholder="Entrer votre Nom" value="<?php echo $inputName ?>">
        </div>
        <div class="pb-3 invalid-feedback <?php echo $validName ?>">
          Entrez un Prénom valide !
        </div>

<!-- Vérification de l'unicité dans la base de données -->
        <div class="form-group">
          <label for="email">Mail : </label>
          <input type="email" name="mail" class = "bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validMail ?>" id="email" placeholder="Entrer votre adresse mail" value="<?php echo $inputMail ?>">
        </div>

        <div class="pb-3 invalid-feedback <?php echo $validMail ?>">
          <?php echo $errMail ?>
        </div>
<!-- Vérification des mots de passe entre eux + une majuscule, un caractere spécial et une lettre
+ taille minimale et maximale-->
        <div class="form-group">
          <label for="password">Mot de Passe (3-20 caractères) :</label>
          <input type="password" name="password" class = "bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validPassword ?>" id="password" placeholder="Entrer votre mot de passe" value="<?php echo $inputPassword ?>">
        </div>

        <div class="pb-3 invalid-feedback <?php echo $validPassword ?>">
          Entrez un mot de passe valide !
        </div>


        <div class="form-group">
          <label for="password2">Confirmation du Mot de passe : </label>
          <input type="password" name="password2" class = "bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validPassword2 ?>" id="password2" placeholder="Entrer votre mot de passe" value="<?php echo $inputPassword2 ?>" >
        </div>

        <div class="pb-3 invalid-feedback <?php echo $validPassword2 ?>">
          Entrez un mot de passe valide !
        </div>

<!-- Affichage si les deux mots de passes sont différents -->
        <div class="text-danger text-center <?php echo $correspondance_password ?>">
            Pas de correspondance entre les mots de passe
        </div>

<!-- Boutton pour envoyer à la base de données -->
        <div class="submition">
          <button type="submit" name="submit" class="btn submit-btn w-100 mt-4 p-2" style="border-radius: 20px;">s'enregistrer</button>
        </div>


      </form>


</body>