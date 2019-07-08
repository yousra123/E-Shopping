<?php   
    Include("head.php");
    Include("navbar.php");
    ?>
    <body >
        <div style="padding-top: 10%;">
            <h2 style="color: black; padding-top: 10%;"><center> Vous êtes sur le point d'accéder au compte administrateur du site,</center></h2>
            <h5 style="color: black;"><center>Veuillez entrer le mot de passe correspondant : </center></h5>
            <form class="form-inline container" style="padding-top: 5%; padding-left: 30%;" method="POST" action="admin_connecte.php">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="passwrd">
                </div>
                <button type="submit" class="btn submit-btn w-50 mt-4 p-2" style="border-radius: 20px;" name="submit">Confirm identity</button>
            </form>
            <h5  style="color: black; padding-top: 5%;"><center> En vous connectant au compte administrateur, vous pourrez accéder au données du site, supprimer et/ou modifier des catégories et/ou des produits existants...</center></h5>
        </div>