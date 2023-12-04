<?php
 class User {
    private $nom;
    private $prenom;
    private $adresse;
    private $email;
    private $pass;

    public function __construct ($nom,$prenom,$adresse,$email,$pass) {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->email=$email;
        $this->pass=$pass;
    }
    public function saveUser(){
        global $db;
        $nom =$this->nom;
        $prenom =$this->prenom;
        $adresse =$this->adresse;
        $email =$this->email;
        $pass =$this->pass;
        $requette ="INSERT INTO  users (nom,prenom,adresse,email,passwrd) VALUES (:nom,:prenom,:adresse,:email,:pass)";
        $statement = $db->prepare($requette);
        $execution = $statement->execute(
            [
                ':nom'=>$nom,
                ':prenom'=>$prenom,
                ':adresse'=>$adresse,
                ':email'=>$email,
                ':pass'=>$pass,
            ]
            );
        if($execution){
            return true;
        }
    }
    static function getUser($email) {
        global $db;
        $requette = "SELECT * FROM users WHERE email=:email";
        $statement = $db->prepare($requette);
        $execution= $statement->execute([
            ':email'=>$email,
        ]);
        
        if ($execution){
            if ($data=$statement->fetch()) {
                $user= new User($data['nom'],$data['prenom'],$data['adresse'],$data['email'],$data['passwrd']);
                return $user;
            } 
        } else return null;
    }
    static function getLocataireById($id) {
        global $db;
        $requette = "SELECT * FROM users WHERE numLocataire=:numLocataire";
        $statement = $db->prepare($requette);
        $execution= $statement->execute([
            ':numLocataire'=>$id,
        ]);
        if ($execution){
            if ($data=$statement->fetch()) {
                $locataire= new User ($data['nom'],$data['prenom'],$data['adresse'],$data['email'],$data['pass'],$data['villeLocataire'],$data['numTel1Locataire'],$data['numTel2Locataire']);
                return $locataire;
            } 
        } else return null;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPass(){
        return $this->pass;
    }
}