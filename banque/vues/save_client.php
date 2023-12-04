<?php
session_start();
ini_set('log_errors', 1);
ini_set('error_log', '../configuration/fichier.log');
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proprietaire</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="shortcut icon" href="../includes/images/logo2.png" type="image/x-icon">
    <?php include_once '../includes/framework.php';
    include_once('./layout.php');
    ?>


</head>

<body>
    <?php
    include('../includes/framework.php');
    include_once '../controller/liste_client.php' ?>
    <div class="row corps">
        <div class="col-3"></div>
        <div class="form col-6">
            <h3 class="titre-form py-2">Creer un compte Client</h3>
            <form action="../controller/enregistrer_client.php" method="POST" id="form">
                <input class="form-control" type="text" placeholder="Nom du client" name="nom" required><br>
                <input class="form-control" type="tel" placeholder="Numero de telephone" name="phone" required><br>

                <input class="form-control" type="email" placeholder="Adresse email" name="email" required><br>
                <button class="btn btn-primary" type="submit" value="Envoyer">Enregistrer</button>
        </div>
        </form>
        <div class="col-3"></div>
    </div>
    <div class="row">
        
        <div class="col-3"></div>
        <div class="col-6 py-5 justify-content-center align-items-center">
            <table class="table table-stripped">
                <thead>
                    <th>Num client</th>
                    <th>Nom client</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($clients = liste_client() as $client) {
                        $id = $client->getNumClient();
                        $nom = $client->getNom();
                        echo <<< _END
                            <tr>
                            <td>$id</td>
                            <td>$nom</td>
                            <td><a href="../controller/delete_client.php?id=$id"><i class="fa-solid fa-trash" style="color:#000;"></i></a>
                            </td>
                            </tr>
                            _END;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-3"></div>

    </div>
</body>

</html>