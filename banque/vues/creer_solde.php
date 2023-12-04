<?php
session_start();
ini_set('log_errors', 1);
ini_set('error_log', '../configuration/fichier.log');
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <title>appartement</title>
    <link rel="shortcut icon" href="../includes/images/logo2.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php 
    
    include_once '../controller/liste_client.php'; 
    include_once '../models/solde.php';
    include_once('./layout.php'); 
    
    ?>

</head>

<body>

    <div class=" row corps">
    <div class="col-3"></div>
        <div class="col-6 form">
            <h3 class="titre-form">Enregistrer une transaction</h3>
            <form action='../controller/enregistrer_solde.php' method='POST' enctype="multipart/form-data" id="form">

                <label class="form-label">Code du client</label>
                <select name="code_client" class="form-select" required>
                    <?php
                    foreach ($clients = liste_client() as $client) {
                        $id=$client->getNumClient();
                        echo <<< _END
                        <option value="$id">$id</option>;
                        _END;
                    }
                    ?>
                </select><br>
                <label class="form-label" for="montant">Montant de la transaction</label>
                <input class="form-control" type="number" name="montant_trans" id=""><br>
                <label class="form-label" for="type">Type de transaction</label>
                <select class="form-select"  name="type" id="">
                    <option value="depot">Depot</option>
                    <option value="retrait">Retrait</option>
                </select><br>
                <button type="submit" value="Envoyer" class="btn btn-primary">Enregistrer</button>
        </div>
        </form>

    </div>
    <div class="col-3"></div>
                </div>
    <div class="row">
    <div class="col-3"></div>
    <div class="col-6 py-5 justify-content-center align-items-center">
            <h2>Les soldes</h2>
            <table class="table table-stripped">
        
            <thead>
                <th>Num</th>
                <th>Nom</th>
                <th>Solde</th>
            </thead>
        <?php
                    foreach ($clients = liste_client() as $client) {
                        $id=$client->getNumClient();
                        $nom=$client->getNom();
                        $solde=Solde ::all_solde($id);
                        echo <<< _END
                        <tr>
                        <td>$id</td>
                        <td>$nom</td>
                        <td>$solde</td>
                        </tr>
                        _END;
                    }
                    ?>
        </table>
        </div>
        <div class="col-3"></div>

    </div>
</body>

</html>