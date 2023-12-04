<?php

include '../configuration/config.php';
include '../models/client.php';


function liste_client(){
     return Client::getClient();

}