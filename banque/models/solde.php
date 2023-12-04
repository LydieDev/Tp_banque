<?php
 class Solde {
    private $client;
    private $montant;
    private $date_trans;
    private $type_trans;

    public function __construct ($client,$montant,$date_trans,$type_trans) {
    
        $this->client=$client;
        $this->montant=$montant;
        $this->date_trans=$date_trans;
        $this->type_trans=$type_trans;
    }
    public function creerSolde(){
        global $db;
        $client =$this->client;
        $montant =$this->montant;
        $date_trans =$this->date_trans;
        $type_trans =$this->type_trans;
        $requette ="INSERT INTO  solde (client_id,montant,date_transaction,type_transaction) VALUES (:client,:montant,:date_trans,:type_trans)";
        $statement = $db->prepare($requette);
        $execution = $statement->execute(
            [
                ':client'=>$client,
                ':montant'=>$montant,
                ':date_trans'=>$date_trans,
                ':type_trans'=>$type_trans,
            ]
            );
        if($execution){
            return true;
        }
    }
    static function all_solde($id) {
        global $db;
        $solde_total=0;
        $requette = "SELECT montant,type_transaction FROM solde WHERE client_id=:id";
        $statement = $db->prepare($requette);
        $execution= $statement->execute([
            ':id'=> $id,
        ]);
        if ($execution){
            while ($data=$statement->fetch(PDO::FETCH_ASSOC)) {
                $type=$data['type_transaction'];
                $montant=$data['montant'];
                    if ($type== "depot"){
                        $solde_total+=$montant;
                    }
                    if ($type== "retrait"){
                        if($montant>=0){
                            $solde_total-=$montant;

                        }
                    }
                    
                } 
                return $solde_total;
        }
    }
    static function getSolde() {
        global $db;
        $requette = "SELECT * FROM solde WHERE 1";
        $statement = $db->prepare($requette);
        $execution= $statement->execute([]);
        $Soldes=[];
        if ($execution){
            while ($data=$statement->fetch()) {
                $Solde= new Solde($data['client_id'],$data['montant'],$data['date_transaction'],$data['type_transaction']);
                array_push($Soldes,$Solde);
            } 
            return $Soldes;
        } else return [];
    }
    
    static function getSoldeById($id) {
        global $db;
        $requette = "SELECT montant FROM Solde WHERE id=:id";
        $statement = $db->prepare($requette);
        $execution= $statement->execute([
            ':id'=>$id,
        ]);
        if ($execution){
            if ($data=$statement->fetch()) {
                $Solde= new Solde($data['client_id'],$data['montant'],$data['date_transaction'],$data['type_transaction']);
                return $Solde;
            } 
        } else return null;
    }
    // public function getNumSolde(){
    //     global $db;
    //     $requette= "SELECT numSolde FROM Solde WHERE nomSolde=:nomSolde AND client=:client AND numTel1Solde=:numTel1Solde AND montant=:montant";
    //     $statement=$db->prepare($requette);
    //     $execution=$statement->execute(
    //         [
    //             ':nomSolde'=>$this->getNom(),
    //             ':client'=>$this->getPrenom(),
    //             ':numTel1Solde'=>$this->getNumTel1(),
    //             ':montant'=>$this->getAdresse1(),
    //         ]
    //     );
    //     if ($execution) {
    //         if ($data=$statement->fetch()) {
    //             $numSolde = $data['numSolde'];
    //             $_SESSION['numSolde']=$numSolde;
    //             return $numSolde;
    //         } else return null;
    //     }else return null;
    // }
    
    public function get_client_id(){
        return $this->client;
    }
    public function get_montant(){
        return $this->montant;
    }
    public function get_type_trans(){
        return $this->type_trans;
    }
}