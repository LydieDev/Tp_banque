<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Casa- inscription</title>
    <link rel="shortcut icon" href="../includes/images/logo2.png" type="image/x-icon">
    <?php
    include_once('./layout.php');
    ?>
    
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
    <section class="inscription">
        <div class="row d-flex inscription  justify-content-center align-items-center" style="height: 90vh;">
            <div class="col-3"></div>
            <div class="col-6">
            <div>
                
                <h3 class="py-4">Veuillez vous authentifier...</h3>
            </div>
            <div>
                <form action="../controller/saveUser.php" method="post">
                    <input class="form-control" name="nom" type="text" placeholder="entrez votre nom"><br>
                    <input class="form-control" name="prenom" type="text" placeholder="entrez votre prenom"><br>
                    <input class="form-control" name="adresse" type="text" placeholder="entrez votre adresse"><br>
                    <input class="form-control" name="email" type="mail" placeholder="entrez votre email"><br>
                    <input class="form-control" name="pass" type="password" placeholder="entrez votre mot de passe"><br>
                    <input class="form-control" name="confPass" type="password" placeholder="confirmez votre mot de passe"><br>
                    <button class="btn btn-primary" type="submit" value="inscrire" name="inscrire">S'INSCRIRE</button><br>
                    <p></p>
                    <p>Deja inscrit ? <a href="../index.php">Se connecter</a></p>
                </form>

            </div>
            </div>
            <div class="col-3"></div>
        </div>
    </section>
</body>

</html>