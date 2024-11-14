<?php

class ResidenciasBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
    }


      public function cadastrarResidencia($idResidencia,$numResidencia, $bloco, $idMorador){
        $sql = "INSERT INTO residencias(idresidencia, numresidencia, bloco, idMorador) values (:i,:n,:b,:m)";
        
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$idResidencia);
        $comando->bindValue("n",$numResidencia);
        $comando->bindValue("b",$bloco);
        $comando->bindValue("m",$idMorador);
 
  
  
       return $comando->execute();
        }

        public function hidratar($array)
        {
            $todos = [];
    
            foreach ($array as $valor) {
                $residencia = new Residencias();
                $residencia->setIdresidencia($valor['IDresidencia']);
                $residencia->setNumResidencia($valor['Numresidencia']);
                $residencia->setBloco($valor['BLOCO']);
               /* $residencia->setIdMorador($valor['IDMORADOR']);*/
               
    
                $todos[] = $residencia;
            }
            return $todos;
        }

        public function ListarResidencia(){

          $sql = "SELECT * FROM residencias";
          $comando = $this->pdo->prepare($sql);
          $comando->execute();
          $todasResidencias = $comando->fetchAll(PDO::FETCH_ASSOC);
          return $this->hidratar($todasResidencias) ;
         
          }
    }