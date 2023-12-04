<?php
session_start();
ini_set('log_errors', 1);
ini_set('error_log', './configuration/fichier.log');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Casa- inscription</title>
    <link rel="shortcut icon" href="./includes/images/logo2.png" type="image/x-icon">

    <?php
    include_once './vues/layout.php';
   
    ?>
    <!-- <style>
        <?php include '../includes/css/style.css'; ?>
        /* form {
      background-color: transparent;
      border: none;
      padding: 20px;
      text-align: center;
    }

    input, button {
      background-color: rgba(255, 255, 255, 0.5);
      border: 1px solid red;
      padding: 10px;
      margin: 10px;
      border-radius: 5px;
    } */
    </style> -->
</head>

<body class='body'>
    <!-- <nav>
        <ul>
            <li></li>
            <li></li>
            <li><a href="./accueil.php">Accueil</a></li>
            <li><a href="./connexion.php">connexion</a></li>
            <li><a href="./apropos.php">A propos</a></li>
        </ul>
    </nav> -->
    <section class=" row  d-flex inscription  justify-content-center align-items-center" style="height: 90vh;">
        <div class="col-3"></div>
        <div class="block col-6 h-100">
            <div>
                
                <h4 class="py-4">Veuillez vous connecter...</h4>
            </div>
            <div class="">
                <form action="./controller/connexion.php" method="post">
                    <input class="form-control" name="email" type="mail" placeholder="entrez votre email"><br>
                    <input class="form-control" name="pass" type="password" placeholder="entrez votre mot de passe"><br>
                    <!-- <input type="checkbox" name="remember"> Remember me <br> -->
                    <button class="btn btn-primary" type="submit">SE CONNECTER</button><br>
                    <p></p>
                    <p>Vous n'avez pas encore de compte ? <a href="./vues/inscription.php"> Inscrivez-vous</a></p>
                </form>

            </div>
        </div>
        <div class="col-3"></div>
    </section>
</body>

</html>