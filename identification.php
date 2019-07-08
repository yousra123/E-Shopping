<!-- <?php
   // Include("head.php");
    //Include("navbar.php");
    //Include("functions.php");
?> -->
<!-- <head>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    </head> -->

<!-- <body class="text-center container">
    <header class="container" style="padding-top: 10%;">
    <?php
        $prix = 0;
        if (isset($_GET["prix_total"])){
            $prix = $_GET["prix_total"];
        }
    ?>
    <form class="form-signin" method="POST" action="facture.php/?prix=<?php echo $_GET["prix_total"]; ?>">
        <img class="mb-4" src="logo.png" alt="logo" width="100" height="100" style="display: block; margin: auto;">
        <div style="padding-bottom: 5%;">
            <h1 class="h3 mb-3 font-weight-normal" style="color: black; padding-bottom: 5%;">Veuillez vous identifier</h1>
        </div>
        <div class="container">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="mail" required autofocus>
        </div>
        <div style="padding-top: 2%;" class="container">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="mdp" required>
        </div>
        <button class="btn submit-btn w-50 mt-4 p-2" type="submit" name="submit" style="border-radius: 20px; display: block; margin : auto;">Sign in</button> 
         <div style="padding-top: 2%;">
            <h1 class="h3 mb-3 font-weight-normal" style="color: black; ">Ou</h1>
        </div>
        <button class="btn submit-btn w-50 mt-4 p-2" style="border-radius: 20px; display: block; margin : auto;">Inscrivez-vous</button>  
    </form>
    </header>
    <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </body> -->

  <!--   <form method="post" class="needs-validation" novalidate>
	<div class="form-group">
		<label>Adresse mail</label>
		<input type="email" name="mail" class="bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validMail ?>" style="border-radius: 12px;" placeholder="Entrer votre adresse mail" value="<?php echo $inputMail ?>">
	</div>
	<div class="pb-3 invalid-feedback <?php echo $validMail ?>">
    	Entrez une adresse mail valide
  	</div>
	<div class="form-group">
		<label>Mot de passe</label>
		<input type="password" name="password" class="bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validPassword ?>" style="border-radius: 12px;" placeholder="Entrer votre mot de passe" value="<?php echo $inputPassword ?>">
	</div>
	<div class="pb-3 invalid-feedback <?php echo $validPassword ?>">
    	Entrez un mot de passe valide (3-20 caractères)
  	</div>
    <div class="text-danger text-center <?php echo $corres ?>">
        Pas de correspondance entre le mail et le mot de passe
    </div>
	<button type="submit" name="submit" class="btn submit-btn w-100 mt-4 p-2" style="border-radius: 20px;">Se connecter</button>
</form>  -->

<form method="post" class="needs-validation" action="#" novalidate>
	<div class="form-group">
		<label>Adresse mail</label>
		<input type="email" name="mail" class="bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validMail ?>" style="border-radius: 12px;" placeholder="Entrer votre adresse mail" value="<?php echo $inputMail ?>">
	</div>
	<div class="pb-3 invalid-feedback <?php echo $validMail ?>">
    	Entrez une adresse mail valide
  	</div>
	<div class="form-group">
		<label>Mot de passe</label>
		<input type="password" name="password" class="bg-light shadow-sm pb-4 pt-4 form-control <?php echo $validPassword ?>" style="border-radius: 12px;" placeholder="Entrer votre mot de passe" value="<?php echo $inputPassword ?>">
	</div>
	<div class="pb-3 invalid-feedback <?php echo $validPassword ?>">
    	Entrez un mot de passe valide (3-20 caractères)
  	</div>
    <div class="text-danger text-center <?php echo $corres ?>">
        Pas de correspondance entre le mail et le mot de passe
    </div>
	<button type="submit" name="submit" class="btn submit-btn w-100 mt-4 p-2" style="border-radius: 20px;">Se connecter</button>
</form> 