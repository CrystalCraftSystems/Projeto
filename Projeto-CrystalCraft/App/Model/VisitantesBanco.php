<?php

class VisitantesBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
    }


      public function cadastrarVisitante($idVisitante,$nomeVisitante, $descricaoVisitante, $idMorador){
        $sql = "INSERT INTO visitantes(idvisitante, nomevisitante, descricaovisitante, idmorador) values (:i,:n,:d,:m)";
        
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$idVisitante);
        $comando->bindValue("n",$nomeVisitante);
        $comando->bindValue("d",$descricaoVisitante);
        $comando->bindValue("m",$idMorador);
  
  
       return $comando->execute();
        }

        public function hidratar($array)
        {
            $todos = [];
    
            foreach ($array as $valor) {
                $visitante = new Visitantes();
                $visitante->setIdVisitante($valor['IDvisitante']);
                $visitante->setNomeVisitante($valor['NOMEvisitante']);
                $visitante->setDescricaoVisitante($valor['DESCRICAOVISITANTE']);
                /*$visitante->setIdMorador($valor['IDMORADOR']);*/
            
                $todos[] = $visitante;
            }
            return $todos;
        }

        public function ListarVisitante(){

          $sql = "SELECT * FROM visitantes";
          $comando = $this->pdo->prepare($sql);
          $comando->execute();
          $todosVisitantes = $comando->fetchAll(PDO::FETCH_ASSOC);
          return $this->hidratar($todosVisitantes) ;
         
          }
    }