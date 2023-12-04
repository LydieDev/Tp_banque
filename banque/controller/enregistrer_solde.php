<?php
include '../configuration/config.php';
include '../models/solde.php';

$montant = $_POST['montant_trans'];
$client = $_POST['code_client'];
$type_trans = $_POST['type'];
$date = date('Y-m-d');
$solde_actu=SOLDE::all_solde($client);
$locataire;
if ($type_trans == 'retrait'){
    if ($montant <= $solde_actu){
        $locataire = new Solde ($client,$montant,$date,$type_trans);
    }else{
        header("Location:../vues/creer_solde.php");
    }
}else{
$locataire = new Solde ($client,$montant,$date,$type_trans);
}
if ($locataire -> creerSolde()){
    echo 'reussi';
    header("Location:../vues/creer_solde.php");
}