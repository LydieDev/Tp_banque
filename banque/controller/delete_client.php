<?php
session_start();
include '../configuration/config.php';
include_once '../models/client.php';
if (isset($_GET['id'])) {

    $id=$_GET['id'];
    if(Client::delete_client($id)){
        header("Location:../vues/save_client.php");
    }
}