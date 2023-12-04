<?php
include '../configuration/config.php';
include '../models/client.php';

$nom = $_POST['nom'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$proprio = new Client ($nom,$email,$phone);
if ($proprio -> creerClient()){
    header("Location:../vues/save_client.php");
}