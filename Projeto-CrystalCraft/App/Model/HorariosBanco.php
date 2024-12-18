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

      public function hidratar($array)
        {
            $todos = [];
    
            foreach ($array as $valor) {
                $horario = new Horarios();
                //$horario->setIdVisitante($valor['IDVISITANTE']);
                $horario->setIdRegistro($valor['IDREGISTRO']);
                $horario->setDataRegistro($valor['DATAREGISTRO']);
                $horario->setHoraEntrada($valor['HORAENTRADA']);
                $horario->setHoraSaida($valor['HORASAIDA']);
                $horario->setPlacaVeiculo($valor['PLACAVEICULO']);
                
    
                $todos[] = $horario;
            }
            return $todos;
        }

        public function ListarHorario(){

          $sql = "SELECT * FROM horarios";
          $comando = $this->pdo->prepare($sql);
          $comando->execute();
          $todosHorarios = $comando->fetchAll(PDO::FETCH_ASSOC);
          return $this->hidratar($todosHorarios) ;
         
          }
    }