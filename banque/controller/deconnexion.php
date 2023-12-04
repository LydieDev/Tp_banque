<?php
session_abort();
$_SESSION['nom'] = '';
$_SESSION['prenom'] = '';
$_SESSION['email'] = '';
$_SESSION['adresse'] = '';
header("Location:../index.php");