<?php

class MoradoresBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
    }


      public function cadastrarMorador($idMorador,$nomeMorador, $cpfMorador, $idResidencia){
        $sql = "INSERT INTO moradores(idmorador, nomemorador, cpfmorador, idresidencia) values (:i,:n,:c,:r)";
        
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$idMorador);
        $comando->bindValue("n",$nomeMorador);
        $comando->bindValue("c",$cpfMorador);
        $comando->bindValue("r",$idResidencia);
  
       return $comando->execute();

        }
    }