<?php
session_start();
include '../configuration/config.php';
include '../models/user.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $thisUser = User::getUser($email);
    if ($thisUser === null) {
        echo 'Veuillez entrer des informations valides pour vous connecter';
    } else {
        $pass = $_POST['pass'];
        $truePass = $thisUser->getPass();
        if (password_verify($pass, $truePass)) {
            $_SESSION['nom'] = $thisUser->getNom();
            $_SESSION['prenom'] = $thisUser->getPrenom();
            $_SESSION['email'] = $thisUser->getEmail();
            $_SESSION['adresse'] = $thisUser->getAdresse();
            $_SESSION['etat']=true;
            header("Location:../vues/save_client.php");
        }
        else {
            echo ('le mot de passe est incorrect');
        }
    }
} 


