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
/*
        public function hidratar($array)
        {
            $todos = [];
    
            foreach ($array as $valor) {
                $morador = new Moradores();
                $morador->setIdMorador($valor['IDMorador']);
                $morador->setNomeMorador($valor['NOMEMorador']);
                $morador->setCpfMorador($valor['CPFMorador']);
               /* $morador->setIdResidencia($valor['IDRESIDENCIA']);
          
    
                $todos[] = $morador;
            }
            return $todos;
        }

        public function ListarMorador(){

          $sql = "SELECT * FROM moradores";
          $comando = $this->pdo->prepare($sql);
          $comando->execute();
          $todosMoradores = $comando->fetchAll(PDO::FETCH_ASSOC);
          return $this->hidratar($todosMoradores) ;
         
          }*/
    }