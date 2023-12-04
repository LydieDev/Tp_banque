<?php
class Client {
    private $nom;
    private $email;
    private $num_phone;

    public function __construct ($nom,$email,$num_phone) {
        $this->nom=$nom;
        $this->email=$email;
        $this->num_phone=$num_phone;
    }
    public function creerClient(){
        global $db;
        $nom =$this->nom;
        $email =$this->email;
        $num_phone =$this->num_phone;
        $requette ="INSERT INTO  client (nom,num_phone,email) VALUES (:nom,:num_phone,:email)";
        $statement = $db->prepare($requette);
        $execution = $statement->execute(
            [
                ':nom'=>$nom,
                ':num_phone'=>$num_phone,
                ':email'=>$email,
            ]
            );
        if($execution){
            return true;
        }
    }
    static function getClient(){
        global $db;
        $requete = 'SELECT * FROM client WHERE 1';
        $stetment = $db->prepare($requete);
        $execution = $stetment->execute ([]);
        $Clients = [];
        if ($execution) {
            while ($data = $stetment -> fetch()) {
                $Client = new Client ($data['nom'],$data['email'],$data['num_phone']);
                array_push($Clients,$Client);
            }
            return $Clients;
        } else return [];
    }
    public function getNumClient(){
        global $db;
        $requete = 'SELECT num FROM Client WHERE nom = :nom AND email=:email';
        $stetment = $db->prepare($requete);
        $execution = $stetment->execute(
            [
                ':nom' => $this->getNom(),
                ':email' => $this -> getEmail()
            ]
        );
        if ($execution) {
            if ($data = $stetment->fetch()) {
                $numClient = $data['num'];
                return $numClient;
            } else return null;
        } else return null;
    }
    static function delete_client($id){
        global $db;
        $requete = 'DELETE FROM client WHERE num=:id';
        $stetment = $db->prepare($requete);
        $execution = $stetment->execute(
            [
                ':id' => $id,
            ]
        );
        if ($execution) {
            return true;
        } 
    }
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
   
    public function get_num_phone()
    {
        return $this->num_phone;
    }
    
}