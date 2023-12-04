<?php

include '../configuration/config.php';
include '../models/user.php';

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $passwrd = $_POST['pass'];
    $confPass = $_POST['confPass'];
    if ($passwrd===$confPass) {
        $pass=password_hash($passwrd,PASSWORD_DEFAULT);
        $user = new User ($nom,$prenom,$adresse,$email,$pass);
        
        if ($user -> saveUser()){
            header("Location:../vues/connexion.php");
        }
    }else{
        echo('les mots de passe doivent correspondre') ;
    }
}