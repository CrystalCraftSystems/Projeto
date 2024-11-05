<?php

class HorariosBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
    }


      public function cadastrarHorario($idVisitante,$idRegistro, $dataRegistro, $horaEntrada, $horaSaida,$placaVeiculo){
        $sql = "INSERT INTO horarios(idVisitante,idRegistro, dataRegistro, horaentrada, horasaida, placaveiculo) values (:v,:i,:d,:e,:s,:p)";
  
        $originalDate = $dataRegistro;
        $dataRegistro = date("Y-m-d", strtotime($originalDate));

        $originalHoraE = $horaEntrada;
        $horaEntrada= date("H:i:s", strtotime($originalHoraE));

        $originalHoraS = $horaSaida;
        $horaSaida= date("H:i:s", strtotime($originalHoraS));
        
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("v",$idVisitante);
        $comando->bindValue("i",$idRegistro);
        $comando->bindValue("d",$dataRegistro);
        $comando->bindValue("e",$horaEntrada);
        $comando->bindValue("s",$horaSaida );
        $comando->bindValue("p",$placaVeiculo);
  
  
       return $comando->execute();
        }
    }